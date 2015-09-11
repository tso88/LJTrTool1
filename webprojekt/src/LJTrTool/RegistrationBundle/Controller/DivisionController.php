<?php

namespace LJTrTool\RegistrationBundle\Controller;

use LJTrTool\RegistrationBundle\Entity\Division;
use LJTrTool\RegistrationBundle\Form\DivisionType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * @Route("/division")
 */
class DivisionController extends Controller
{
    /**
     * @Route("s", name="division_index")
     * @Template()
     * @Security("has_role('ROLE_USER')")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $divisions = $em->getRepository('LJTrToolRegistrationBundle:Division')->findBy(array(), array('divisionName' => 'ASC'));

        return $this->render('LJTrToolRegistrationBundle:Division:index.html.twig', array('modal_dialog' => true, 'divisions'=> $divisions));
    }

    /**
     * @Route("/{divisionId}", name="division_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($divisionId)
    {
        $em = $this->getDoctrine()->getManager();
        $division = $em->getRepository('LJTrToolRegistrationBundle:Division')->find($divisionId);

        if (!$division) {
            throw $this->createNotFoundException(
                'No division found for id '.$divisionId
            );
        }

        return $this->render('LJTrToolRegistrationBundle:Division:show.html.twig', array('division'=> $division));
    }


    /**
     * @Route("/{divisionId}/delete", name="division_delete")
     * @Method("GET")
     * @Template()
     */
    public function deleteAction($divisionId)
    {
        $em = $this->getDoctrine()->getManager();
        $division = $em->getRepository('LJTrToolRegistrationBundle:Division')->find($divisionId);
        if(!empty($division)) {
            $em->remove($division);
            $em->flush();
        }
        return $this->redirectToRoute('division_index');
    }


    /**
     * @Route("/new", name="createDivision")
     * @Method("POST")
     * @Template()
     */
    public function createAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(new DivisionType(), new Division());
        $form->handleRequest($request);

        if ($form->isValid()) {
            $division = $form->getData();

            $em->persist($division);
            $em->flush();

            return $this->redirectToRoute('division_show', array('divisionId' => $division->getDivisionId()));
        }

        return $this->render('LJTrToolRegistrationBundle:Division:new.html.twig', array(
            'form' => $form->createView(),
        ));
	}

    /**
     * @Route("/change", name="changeDivision")
     * @Method("POST")
     * @Template()
     */
    public function changeAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(new DivisionType(), new Division());
        $form->handleRequest($request);

        if ($form->isValid()) {
            $division = $form->getData();
            $em->merge($division);
            $em->flush();
            return $this->redirectToRoute('division_show', array('divisionId' => $division->getDivisionId()));
        }

        return $this->redirectToRoute('division_edit', array('divisionId' => $division->getDivisionId()));
    }
	
	/**
     * @Route("/", name="division_new")
	 * @Method("GET")
     * @Template()
     */
    public function newFormAction()
    {
        $division = new Division();
        $form = $this->createForm(new DivisionType(), $division, array('action' => $this->generateUrl('createDivision')));
		return $this->render('LJTrToolRegistrationBundle:Division:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/{divisionId}/edit", name="division_edit")
     * @Template()
     */
    public function editFormAction($divisionId)
    {
        $em = $this->getDoctrine()->getManager();
        $division = $em->getRepository('LJTrToolRegistrationBundle:Division')->find($divisionId);
        $form = $this->createForm(new DivisionType(), $division, array('action' => $this->generateUrl('changeDivision')));
        return $this->render('LJTrToolRegistrationBundle:Division:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}
