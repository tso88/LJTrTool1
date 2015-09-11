<?php

namespace LJTrTool\RegistrationBundle\Controller;

use LJTrTool\RegistrationBundle\Entity\Role;
use LJTrTool\RegistrationBundle\Entity\RoleApproval;
use LJTrTool\RegistrationBundle\Form\RoleApprovalType;
use LJTrTool\RegistrationBundle\Form\RoleAjaxType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * @Route("/")
 */
class RoleApprovalController extends Controller
{
    /**
     * @Route("event/{eventLinkName}/roleApprovals", name="roleApproval_index")
     * @Template()
     * @Security("has_role('ROLE_USER')")
     */
    public function indexAction($eventLinkName)
    {
        $em = $this->getDoctrine()->getManager();

        $qb_event = $em->createQueryBuilder();
        $qb_event->select(array('e'))
            ->from('LJTrToolRegistrationBundle:Event', 'e')
            ->where('e.eventLinkName = ?1')
            ->setParameter(1, $eventLinkName);
        $query_event = $qb_event->getQuery();
        $event = $query_event->getSingleResult();

        if($event) {
            return $this->render('LJTrToolRegistrationBundle:RoleApproval:index.html.twig', array('modal_dialog' => true, 'event'=> $event));
        }
    }

    /**
     * @Route("event/{eventLinkName}/roleApproval/{roleApprovalId}", name="roleApproval_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($eventLinkName, $roleApprovalId)
    {
        $em = $this->getDoctrine()->getManager();
        $roleApproval = $em->getRepository('LJTrToolRegistrationBundle:RoleApproval')->find($roleApprovalId);

        if (!$roleApproval) {
            throw $this->createNotFoundException(
                'No roleApproval found for id '.$roleApprovalId
            );
        }

        return $this->render('LJTrToolRegistrationBundle:RoleApproval:show.html.twig', array('roleApproval'=> $roleApproval));
    }


    /**
     * @Route("event/{eventLinkName}/roleApproval/{roleApprovalId}/delete", name="roleApproval_delete")
     * @Method("GET")
     * @Template()
     */
    public function deleteAction($roleApprovalId)
    {
        $em = $this->getDoctrine()->getManager();
        $roleApproval = $em->getRepository('LJTrToolRegistrationBundle:RoleApproval')->find($roleApprovalId);
        if(!empty($roleApproval)) {
            $em->remove($roleApproval);
            $em->flush();
        }
        return $this->redirectToRoute('roleApproval_index');
    }


    /**
     * @Route("event/{eventLinkName}/roleApproval/new", name="createRoleApproval")
     * @Method("POST")
     * @Template()
     */
    public function createAction($eventLinkName, Request $request)
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
            throw $this->createNotFoundException('Unable to find Event.');
        }

        //$request->query->set('ljtrtool_registrationbundle_roleapproval[role]', '2e');

        $form_roleApproval = $this->createForm(new RoleApprovalType(), new RoleApproval());
        $form_roleApproval->handleRequest($request);

        $form_role = $this->createForm(new RoleAjaxType(), new Role());
        $form_role->handleRequest($request);

        if ($form_roleApproval->isValid()) {
            $roleApproval = $form_roleApproval->getData();

            $role = $form_role->getData();
            $role->setDisplayName($request->request->get('typeahead_ljtrtool_registrationbundle_roleapproval')['role']);

            $roleApproval->setRole($role);
            $roleApproval->setEvent($event);

            $edit = false;
            if(!empty($role->getRoleId())) {
                $em = $this->getDoctrine()->getManager();
                $role_db = $em->getRepository('LJTrToolRegistrationBundle:RoleApproval')->find($role->getRoleId());
                if($role_db) {
                    if($role_db->equals($role->getRoleId())) {
                        $edit = true;
                    }
                }
            }
            if($edit) {
                $em->merge($role);
            } else {
                $role->unsetRoleId();
                $em->persist($role);
            }
            $em->persist($roleApproval);
            $em->flush();

            return $this->redirectToRoute('roleApproval_show', array('eventLinkName' => $eventLinkName, 'roleApprovalId' => $roleApproval->getRoleApprovalId()));
        }
/*
        return $this->render('LJTrToolRegistrationBundle:RoleApproval:new.html.twig', array(
            'form' => $form->createView(),
        ));
*/
        return $this->render('LJTrToolRegistrationBundle:RoleApproval:show.html.twig', array('roleApproval'=> $roleApproval));
	}

    /**
     * @Route("event/{eventLinkName}/roleApproval/{roleApprovalId}/change", name="changeRoleApproval")
     * @Method("POST")
     * @Template()
     */
    public function changeAction($eventLinkName, Request $request)
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
            throw $this->createNotFoundException('Unable to find Event.');
        }

        $form_roleApproval = $this->createForm(new RoleApprovalType(), new RoleApproval());
        $form_roleApproval->handleRequest($request);

        $form_role = $this->createForm(new RoleAjaxType(), new Role());
        $form_role->handleRequest($request);

        if ($form_roleApproval->isValid()) {
            $roleApproval = $form_roleApproval->getData();
            $role = $form_role->getData();
            $role->setDisplayName($request->request->get('typeahead_ljtrtool_registrationbundle_roleapproval')['role']);

            $roleApproval->setRole($role);
            $roleApproval->setEvent($event);

            $em->merge($roleApproval);
            //$role = $roleApproval->getRole();
            //$em->merge($role);

            $em->flush();
            return $this->redirectToRoute('roleApproval_show', array('eventLinkName' => $eventLinkName, 'roleApprovalId' => $roleApproval->getRoleApprovalId()));
        }

        return $this->redirectToRoute('roleApproval_edit', array('roleApprovalId' => $request->request->get('ljtrtool_registrationbundle_roleapproval')['roleApprovalId']));
    }
	
	/**
     * @Route("event/{eventLinkName}/roleApproval", name="roleApproval_new")
	 * @Method("GET")
     * @Template()
     */
    public function newFormAction($eventLinkName)
    {
        $em = $this->getDoctrine()->getManager();
        $results = $em->getRepository('LJTrToolRegistrationBundle:Role')->findBy(array(), array('roleName' => 'ASC'));
        $list = $this->get("matm.dataset_maker")->makeTypeAheadDataset($results, "getDisplayName", "getDisplayName");

        $roleApproval = new RoleApproval();

        $form = $this->createForm(new RoleApprovalType(), $roleApproval, array('action' => $this->generateUrl('createRoleApproval', array('eventLinkName' => $eventLinkName))));
        return $this->render('LJTrToolRegistrationBundle:RoleApproval:new.html.twig', array(
            'form' => $form->createView(),
            'modal_dialog' => true,
            'list' => $list,
        ));
    }

    /**
     * @Route("event/{eventLinkName}/roleApproval/{roleApprovalId}/edit", name="roleApproval_edit")
     * @Template()
     */
    public function editFormAction($eventLinkName, $roleApprovalId)
    {
        $em = $this->getDoctrine()->getManager();
        $roleApproval = $em->getRepository('LJTrToolRegistrationBundle:RoleApproval')->find($roleApprovalId);
        $form = $this->createForm(new RoleApprovalType(), $roleApproval, array('action' => $this->generateUrl('changeRoleApproval', array('eventLinkName' => $eventLinkName, 'roleApprovalId' => $roleApprovalId))));

        $results = $em->getRepository('LJTrToolRegistrationBundle:Role')->findBy(array(), array('roleName' => 'ASC'));
        $list = $this->get("matm.dataset_maker")->makeTypeAheadDataset($results, "getDisplayName", "getDisplayName");
        return $this->render('LJTrToolRegistrationBundle:RoleApproval:edit.html.twig', array(
            'form' => $form->createView(),
            'modal_dialog' => true,
            'list' => $list,
            'roleApproval' => $roleApproval,
        ));
    }

}
