<?php

namespace LJTrTool\RegistrationBundle\Controller;

use LJTrTool\RegistrationBundle\Entity\Condition;
use LJTrTool\RegistrationBundle\Form\ConditionType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * @Route("/condition")
 */
class ConditionController extends Controller
{
    /**
     * @Route("s", name="condition_index")
     * @Template()
     * @Security("has_role('ROLE_USER')")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $conditions = $em->getRepository('LJTrToolRegistrationBundle:Condition')->findBy(array(), array('conditionName' => 'ASC'));

        return $this->render('LJTrToolRegistrationBundle:Condition:index.html.twig', array('modal_dialog' => true, 'conditions'=> $conditions));
    }

    /**
     * @Route("/{conditionId}", name="condition_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($conditionId)
    {
        $em = $this->getDoctrine()->getManager();
        $condition = $em->getRepository('LJTrToolRegistrationBundle:Condition')->find($conditionId);

        if (!$condition) {
            throw $this->createNotFoundException(
                'No condition found for id '.$conditionId
            );
        }

        return $this->render('LJTrToolRegistrationBundle:Condition:show.html.twig', array('condition'=> $condition));
    }


    /**
     * @Route("/{conditionId}/delete", name="condition_delete")
     * @Method("GET")
     * @Template()
     */
    public function deleteAction($conditionId)
    {
        $em = $this->getDoctrine()->getManager();
        $condition = $em->getRepository('LJTrToolRegistrationBundle:Condition')->find($conditionId);
        if(!empty($condition)) {
            $em->remove($condition);
            $em->flush();
        }
        return $this->redirectToRoute('condition_index');
    }


    /**
     * @Route("/new", name="createCondition")
     * @Method("POST")
     * @Template()
     */
    public function createAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(new ConditionType(), new Condition());
        $form->handleRequest($request);

        if ($form->isValid()) {
            $condition = $form->getData();

            $em->persist($condition);
            $em->flush();

            return $this->redirectToRoute('condition_show', array('conditionId' => $condition->getConditionId()));
        }

        return $this->render('LJTrToolRegistrationBundle:Condition:new.html.twig', array(
            'form' => $form->createView(),
        ));
	}

    /**
     * @Route("/change", name="changeCondition")
     * @Method("POST")
     * @Template()
     */
    public function changeAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(new ConditionType(), new Condition());
        $form->handleRequest($request);

        if ($form->isValid()) {
            $condition = $form->getData();
            $em->merge($condition);
            $em->flush();
            return $this->redirectToRoute('condition_show', array('conditionId' => $condition->getConditionId()));
        }

        return $this->redirectToRoute('condition_edit', array('conditionId' => $condition->getConditionId()));
    }
	
	/**
     * @Route("/", name="condition_new")
	 * @Method("GET")
     * @Template()
     */
    public function newFormAction()
    {
        $condition = new Condition();
        $form = $this->createForm(new ConditionType(), $condition, array('action' => $this->generateUrl('createCondition')));
		return $this->render('LJTrToolRegistrationBundle:Condition:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/{conditionId}/edit", name="condition_edit")
     * @Template()
     */
    public function editFormAction($conditionId)
    {
        $em = $this->getDoctrine()->getManager();
        $condition = $em->getRepository('LJTrToolRegistrationBundle:Condition')->find($conditionId);
        $form = $this->createForm(new ConditionType(), $condition, array('action' => $this->generateUrl('changeCondition')));
        return $this->render('LJTrToolRegistrationBundle:Condition:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}
