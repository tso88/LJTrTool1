<?php

namespace LJTrTool\RegistrationBundle\Controller;

use LJTrTool\RegistrationBundle\Entity\Registration;
use LJTrTool\RegistrationBundle\Form\RegistrationKnownUserType;
use LJTrTool\RegistrationBundle\Form\RegistrationUnknownUserType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * @Route("/")
 */
class RegistrationController extends Controller
{
    /**
     * @Route("registrations", name="registration_index")
     * @Template()
     * @Security("has_role('ROLE_USER')")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $registrations = $em->getRepository('LJTrToolRegistrationBundle:Registration')->findAll();

        return $this->render('LJTrToolRegistrationBundle:Registration:index.html.twig', array('modal_dialog' => true, 'registrations' => $registrations));
    }

    /**
     * @Route("event/{eventLinkName}/registrations", name="registration_index_by_event")
     * @Template()
     * @Security("has_role('ROLE_USER')")
     */
    public function indexByEventAction($eventLinkName)
    {
        $em = $this->getDoctrine()->getManager();

        $qb_event = $em->createQueryBuilder();
        $qb_event->select(array('e'))
            ->from('LJTrToolRegistrationBundle:Event', 'e')
            ->where('e.eventLinkName = ?1')
            ->setParameter(1, $eventLinkName);
        $query_event = $qb_event->getQuery();
        $event = $query_event->getSingleResult();

        $qb_registration = $em->createQueryBuilder();
        $qb_registration->select(array('r'))
            ->from('LJTrToolRegistrationBundle:Registration', 'r')
            ->leftJoin('LJTrToolRegistrationBundle:Event', 'e', 'WITH', 'r.event = e.eventId')
            ->where('e.eventLinkName = ?1')
            ->setParameter(1, $eventLinkName);
        $query_registration = $qb_registration->getQuery();
        $registrations = $query_registration->getResult();

        return $this->render('LJTrToolRegistrationBundle:Registration:index.html.twig', array('modal_dialog' => true, 'event' => $event, 'registrations' => $registrations));
    }


    /**
     * @Route("event/{eventLinkName}/registration/{registrationId}", name="registration_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($registrationId)
    {
        $em = $this->getDoctrine()->getManager();
        $registration = $em->getRepository('LJTrToolRegistrationBundle:Registration')->find($registrationId);
        if (!$registration) {
            throw $this->createNotFoundException(
                'No registration found for id ' . $registrationId
            );
        }

        return $this->render('LJTrToolRegistrationBundle:Registration:show.html.twig', array('registration' => $registration));
    }


    /**
     * @Route("event/{eventLinkName}/registration/{registrationId}/delete", name="registration_delete")
     * @Method("GET")
     * @Template()
     */
    public function deleteAction($eventLinkName, $registrationId)
    {
        $em = $this->getDoctrine()->getManager();
        $registration = $em->getRepository('LJTrToolRegistrationBundle:Registration')->find($registrationId);
        if (!empty($registration)) {
            $em->remove($registration);
            $em->flush();
        }
        return $this->redirectToRoute('event_show', array('eventLinkName' => $eventLinkName));
    }


    /**
     * @Route("event/{eventLinkName}/registration/new", name="createRegistration")
     * @Method("POST")
     * @Template()
     */
    public function createAction($eventLinkName, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(new RegistrationType(), new Registration(), array('attr' => array('personId' => $this->getUser()->getPerson()->getPersonId(), 'eventLinkName' => $eventLinkName)));
        $form->handleRequest($request);

        if ($form->isValid()) {
            $registration = $form->getData();

            //Anmeldung erlaubt?

            //Dublicated Entry
            $qb_registration = $em->createQueryBuilder();
            $qb_registration->select(array('r'))
                ->from('LJTrToolRegistrationBundle:Registration', 'r')
                ->join('LJTrToolRegistrationBundle:Event', 'e', 'WITH', 'r.event = e.eventId')
                ->where('e.eventLinkName = ?1')
                ->andWhere('r.roleApproval = ?2')
                ->andWhere('r.person = ?3')
                ->setParameter(1, $eventLinkName)
                ->setParameter(2, $registration->getRoleApproval()->getRoleApprovalId())
                ->setParameter(3, $registration->getPerson()->getPersonId());
            $query_registration = $qb_registration->getQuery();
            $registered_registrations = $query_registration->getResult();

            if(sizeof($registered_registrations) < 1) {
                $em->persist($registration);
                $em->flush();

                return $this->redirectToRoute('event_show', array('eventLinkName' => $eventLinkName));
            } else {
                throw $this->createNotFoundException(
                    'Registration already found for person, event and role.'
                );
            }
        }
        //return $this->redirectToRoute('registration_new', array('eventLinkName' => $registration->getEvent->getEventLinkName(), 'roleApproval' => $registration->getRoleApproval()->getRoleApprovalId()));

        return $this->render('LJTrToolRegistrationBundle:Registration:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("event/{eventLinkName}/registration/change", name="changeRegistration")
     * @Method("POST")
     * @Template()
     */
    public function changeAction($eventLinkName, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(new RegistrationType(), new Registration(), array('attr' => array('personId' => $this->getUser()->getPerson()->getPersonId(),
            'eventLinkName' => $eventLinkName)));
        $form->handleRequest($request);

        if ($form->isValid()) {
            $registration = $form->getData();
            $em->merge($registration);
            $em->flush();
            return $this->redirectToRoute('registration_show', array('registrationId' => $registration->getRegistrationId()));
        }

        return $this->redirectToRoute('registration_edit', array('registrationId' => $registration->getRegistrationId()));
    }

    /**
     * @Route("event/{eventLinkName}/registration/role/{roleApproval}", name="registration_new")
     * @Method("GET")
     * @Template()
     */
    public function newFormAction($eventLinkName = null, $roleApproval = null, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $qb_event = $em->createQueryBuilder();
        $qb_event->select(array('e'))
            ->from('LJTrToolRegistrationBundle:Event', 'e')
            ->where('e.eventLinkName = ?1')
            ->setParameter(1, $eventLinkName);
        $query_event = $qb_event->getQuery();
        $event = $query_event->getSingleResult();

        if (!$event) {
            throw $this->createNotFoundException(
                'No registration found for id ' . $eventLinkName
            );
        }

        $registration = new Registration();
        $registration->setEvent($event);

        if (!empty($roleApproval)) {
            $qb_role = $em->createQueryBuilder();
            $qb_role->select(array('r'))
                ->from('LJTrToolRegistrationBundle:RoleApproval', 'r')
                ->where('r.roleApprovalId = ?1')
                ->setParameter(1, $roleApproval);
            $query_role = $qb_role->getQuery();
            $role = $query_role->getSingleResult();
            $registration->setRoleApproval($role);
        }

        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') && empty($this->getUser())) {
            $registration->setPerson($this->getUser()->getPerson()->getPersonId());

            $form = $this->createForm(new RegistrationKnownUserType(),
                $registration,
                array('action' => $this->generateUrl('createRegistration', array('eventLinkName' => $eventLinkName)),
                    'attr' => array('personId' => $this->getUser()->getPerson()->getPersonId(),
                        'eventLinkName' => $event->getEventLinkName())
                )
            );

            return $this->render('LJTrToolRegistrationBundle:Registration:new.html.twig', array(
                'form' => $form->createView(), 'event' => $event
            ));
        } else {
            $form = $this->createForm(new RegistrationUnknownUserType(),
                $registration,
                array('action' => $this->generateUrl('createRegistration', array('eventLinkName' => $eventLinkName)),
                    'attr' => array('personId' => 0,
                        'eventLinkName' => $event->getEventLinkName())
                )
            );
            return $this->render('LJTrToolRegistrationBundle:Registration:new_withoutUser.html.twig', array(
                'form' => $form->createView(), 'event' => $event
            ));
        }

        //TODO Wenn nicht eingelogt, zeige Formular mit JS Radio für angemeldete und nicht angemeldete Nutzer
    }

    /**
     * @Route("event/{eventLinkName}/registration/{registrationId}/edit", name="registration_edit")
     * @Template()
     */
    public function editFormAction($registrationId)
    {
        $em = $this->getDoctrine()->getManager();
        $registration = $em->getRepository('LJTrToolRegistrationBundle:Registration')->find($registrationId);
        $form = $this->createForm(new RegistrationType(), $registration, array('action' => $this->generateUrl('changeRegistration')));
        return $this->render('LJTrToolRegistrationBundle:Registration:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}
