<?php

namespace LJTrTool\RegistrationBundle\Controller;

use LJTrTool\RegistrationBundle\Entity\Account;
use LJTrTool\RegistrationBundle\Entity\Person;
use LJTrTool\RegistrationBundle\Form\PersonType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * @Route("/person")
 */
class PersonController extends Controller
{
    /**
     * @Route("s", name="person_index")
     * @Template()
     * @Security("has_role('ROLE_USER')")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $persons = $em->getRepository('LJTrToolRegistrationBundle:Person')->findBy(array(), array('division' => 'ASC', 'name' => 'ASC'));

        return $this->render('LJTrToolRegistrationBundle:Person:index.html.twig', array('modal_dialog' => true, 'persons'=> $persons));
    }

    /**
     * @Route("/{personId}", name="person_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($personId)
    {
        $em = $this->getDoctrine()->getManager();
        $person = $em->getRepository('LJTrToolRegistrationBundle:Person')->find($personId);

        if (!$person) {
            throw $this->createNotFoundException(
                'No person found for id '.$personId
            );
        }

        return $this->render('LJTrToolRegistrationBundle:Person:show.html.twig', array('person'=> $person));
    }


    /**
     * @Route("/{personId}/delete", name="person_delete")
     * @Method("GET")
     * @Template()
     */
    public function deleteAction($personId)
    {
        $em = $this->getDoctrine()->getManager();
        $person = $em->getRepository('LJTrToolRegistrationBundle:Person')->find($personId);
        if(!empty($person)) {
            $em->remove($person);
            $em->flush();
        }
        return $this->redirectToRoute('person_index');
    }


    /**
     * @Route("/new", name="createPerson")
     * @Method("POST")
     * @Template()
     */
    public function createAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(new PersonType(), new Person());
        $form->handleRequest($request);

        if ($form->isValid()) {
            $person = $form->getData();

            $account = new Account();
            $account->setPerson($person);
            $account->setEmail($person->getEmail());
            $account->setUsername(strtolower($person->getFirstname()) . "." . strtolower($person->getName()));
            $email = $person->getEmail();
            if(isset($email)) {
                $account->setIsActive(true);
            } else {
                $account->setIsActive(false);
            }

            //password generation and encoding
            $password = '';
            $possible = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $possible .= strtolower($possible).'0123456789';
            for($i=1;$i<16;$i++) {
                $char = substr($possible, mt_rand(0, strlen($possible)-1), 1);
                $password .= $char;
            }
            $encoder = $this->container->get('security.password_encoder');
            $encoded = $encoder->encodePassword($account, $password);
            $account->setPassword($encoded);

            $em->persist($person);
            $em->persist($account);
            $em->flush();

            $path = $person->getPath();
            if(isset($path)) {
                $person->setPath($person->getPersonId().".".$person->getPath());
                $em->merge($person);
                $em->flush();
            }

            $message = \Swift_Message::newInstance()
                ->setSubject('Anmeldebestätigung')
                ->setFrom('ljtrtool@sh.dlrg-jugend.com')
                ->setTo('tim.sochart@gmail.com')
                ->setBody(
                    $this->renderView(
                    // app/Resources/views/Emails/registration.html.twig
                        'LJTrToolRegistrationBundle:Emails:registration.html.twig',
                        array('name' => $person->getFirstname(), 'username'=> $account->getUsername(),'password' => $password)
                    ),
                    'text/html'
                )
                /*
                 * If you also want to include a plaintext version of the message
                ->addPart(
                    $this->renderView(
                        'Emails/registration.txt.twig',
                        array('name' => $name)
                    ),
                    'text/plain'
                )
                */
            ;
            $this->get('mailer')->send($message);

            return $this->redirectToRoute('person_show', array('personId' => $person->getPersonId()));
        }

        return $this->render('LJTrToolRegistrationBundle:Person:new.html.twig', array(
            'form' => $form->createView(),
        ));
	}

    /**
     * @Route("/change", name="changePerson")
     * @Method("POST")
     * @Template()
     */
    public function changeAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(new PersonType(), new Person());
        $form->handleRequest($request);

        if ($form->isValid()) {
            $person = $form->getData();
            $em->merge($person);
            $em->flush();
            return $this->redirectToRoute('person_show', array('personId' => $person->getPersonId()));
        }

        return $this->redirectToRoute('person_edit', array('personId' => $person->getPersonId()));
    }
	
	/**
     * @Route("/", name="person_new")
	 * @Method("GET")
     * @Template()
     */
    public function newFormAction()
    {
        $person = new Person();
        $form = $this->createForm(new PersonType(), $person, array('action' => $this->generateUrl('createPerson')));
		return $this->render('LJTrToolRegistrationBundle:Person:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/{personId}/edit", name="person_edit")
     * @Template()
     */
    public function editFormAction($personId)
    {
        $em = $this->getDoctrine()->getManager();
        $person = $em->getRepository('LJTrToolRegistrationBundle:Person')->find($personId);
        $form = $this->createForm(new PersonType(), $person, array('action' => $this->generateUrl('changePerson')));
        return $this->render('LJTrToolRegistrationBundle:Person:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}
