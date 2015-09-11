<?php

namespace LJTrTool\RegistrationBundle\Controller;

use LJTrTool\RegistrationBundle\Entity\Role;
use LJTrTool\RegistrationBundle\Form\RoleType;
use LJTrTool\RegistrationBundle\Form\RoleAjaxType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * @Route("/role")
 */
class RoleController extends Controller
{
    /**
     * @Route("s", name="role_index")
     * @Template()
     * @Security("has_role('ROLE_USER')")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $roles = $em->getRepository('LJTrToolRegistrationBundle:Role')->findBy(array(), array('roleName' => 'ASC'));
        return $this->render('LJTrToolRegistrationBundle:Role:index.html.twig', array('modal_dialog' => true, 'roles'=> $roles));
    }

    /**
     * @Route("/{roleId}", name="role_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($roleId)
    {
        $em = $this->getDoctrine()->getManager();
        $role = $em->getRepository('LJTrToolRegistrationBundle:Role')->find($roleId);
        if (!$role) {
            throw $this->createNotFoundException(
                'No role found for id '.$roleId
            );
        }
        return $this->render('LJTrToolRegistrationBundle:Role:show.html.twig', array('role'=> $role));
    }


    /**
     * @Route("/{roleId}/delete", name="role_delete")
     * @Method("GET")
     * @Template()
     */
    public function deleteAction($roleId)
    {
        $em = $this->getDoctrine()->getManager();
        $role = $em->getRepository('LJTrToolRegistrationBundle:Role')->find($roleId);
        if(!empty($role)) {
            $em->remove($role);
            $em->flush();
        }
        return $this->redirectToRoute('role_index');
    }


    /**
     * @Route("/new", name="createRole")
     * @Method("POST")
     * @Template()
     */
    public function createAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(new RoleType(), new Role());
        $form->handleRequest($request);

        if ($form->isValid()) {
            $role = $form->getData();

            $em->persist($role);
            $em->flush();

            return $this->redirectToRoute('role_show', array('roleId' => $role->getRoleId()));
        }

        return $this->render('LJTrToolRegistrationBundle:Role:new.html.twig', array(
            'form' => $form->createView(),
        ));
	}

    /**
     * @Route("/change", name="changeRole")
     * @Method("POST")
     * @Template()
     */
    public function changeAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(new RoleType(), new Role());
        $form->handleRequest($request);

        if ($form->isValid()) {
            $role = $form->getData();

            $em->merge($role);
            $em->flush();

            $role_tmp = $em->getRepository('LJTrToolRegistrationBundle:Role')->find($role->getRoleId());
            $role_tmp->setConditions($role->getConditions());
            $em->persist($role_tmp);
            $em->flush();

            return $this->redirectToRoute('role_show', array('roleId' => $role->getRoleId()));
        }

        return $this->redirectToRoute('role_edit', array('roleId' => $role->getRoleId()));
    }
	
	/**
     * @Route("/", name="role_new")
	 * @Method("GET")
     * @Template()
     */
    public function newFormAction()
    {
        $role = new Role();
        $form = $this->createForm(new RoleType(), $role, array('action' => $this->generateUrl('createRole')));
		return $this->render('LJTrToolRegistrationBundle:Role:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/{roleId}/edit", name="role_edit")
     * @Template()
     */
    public function editFormAction($roleId, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $role = $em->getRepository('LJTrToolRegistrationBundle:Role')->find($roleId);
        $form = $this->createForm(new RoleType(), $role, array('action' => $this->generateUrl('changeRole')));
        return $this->render('LJTrToolRegistrationBundle:Role:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/{roleId}/edit_ajax", name="role_edit_ajax")
     * @Template()
     */
    public function ajaxEditFormAction($roleId, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $role = $em->getRepository('LJTrToolRegistrationBundle:Role')->find($roleId);
        $form = $this->createForm(new RoleAjaxType(), $role, array('action' => $this->generateUrl('changeRole')));
        return $this->render('LJTrToolRegistrationBundle:Role:ajax_editRole.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/typeahead", name="role_typeahead")
     * @Method("GET")
     */
    public function addressTypeaheadAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $roles = $em->getRepository('LJTrToolRegistrationBundle:Role')->findBy(array(), array('roleName' => 'ASC'));

    return new JsonResponse(
        array_map(
            function ($val) {
                return (string) $val;
            },
            $roles
        )
    );
}

}
