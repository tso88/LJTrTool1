<?php

namespace LJTrTool\RegistrationBundle\Controller;

use LJTrTool\RegistrationBundle\Entity\Event;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use LJTrTool\RegistrationBundle\Form\EventType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Collections\Criteria;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * @Route("/event")
 */
class EventController extends Controller
{
    /**
     * @Route("s", name="event_index")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $events = $em->getRepository('LJTrToolRegistrationBundle:Event')->findall();

        return $this->render('LJTrToolRegistrationBundle:Event:index.html.twig', array('modal_dialog' => true, 'events'=> $events));
    }

    /**
     * @Route("/{eventLinkName}/delete", name="event_delete")
     * @Method("GET")
     * @Template()
     */
    public function deleteAction($eventLinkName)
    {
        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        $qb->select(array('e'))
            ->from('LJTrToolRegistrationBundle:Event', 'e')
            ->where('e.eventLinkName = ?1')
            ->setParameter(1, $eventLinkName);
        $query = $qb->getQuery();
        $event = $query->getSingleResult();
        if(!empty($event)) {
            $em->remove($event);
            $em->flush();
        }
        return $this->redirectToRoute('event_index');
    }

    /**
     * @Route("/new", name="createEvent")
     * @Method("POST")
     * @Template()
     */
    public function createAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(new EventType(), new Event());
        $form->handleRequest($request);

        if ($form->isValid()) {
            $event = $form->getData();
            $em->persist($event);
            $em->flush();
            return $this->redirectToRoute('event_edit', array('eventLinkName' => $event->getEventLinkName()));
        }

        return $this->render('LJTrToolRegistrationBundle:Event:new.html.twig', array(
            'form' => $form->createView(), 'formErrors' => $form->getErrors(), 'error' => $form->getErrorsAsString(0),
        ));
    }

    /**
     * @Route("/change", name="changeEvent")
     * @Method("POST")
     * @Template()
     */
    public function changeAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(new EventType(), new Event());
        $form->handleRequest($request);

        if ($form->isValid()) {
            $event = $form->getData();
            $em->merge($event);
            $em->flush();
            return $this->redirectToRoute('event_show', array('eventLinkName' => $event->getEventLinkName()));
        }

        return $this->redirectToRoute('event_show', array('eventLinkName' => $event->getEventLinkName()));
    }

    /**
     * @Route("/", name="event_new")
     * @Method("GET")
     * @Template()
     */
    public function newFormAction()
    {
        $event = new Event();
        $form = $this->createForm(new EventType(), $event, array('action' => $this->generateUrl('createEvent')));
        return $this->render('LJTrToolRegistrationBundle:Event:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/{eventLinkName}/edit", name="event_edit")
     * @Template()
     */
    public function editFormAction($eventLinkName)
    {
        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        $qb->select(array('e'))
            ->from('LJTrToolRegistrationBundle:Event', 'e')
            ->where('e.eventLinkName = ?1')
            ->setParameter(1, $eventLinkName);
        $query = $qb->getQuery();
        $event = $query->getSingleResult();

        $form = $this->createForm(new EventType(), $event, array('action' => $this->generateUrl('changeEvent')));
        return $this->render('LJTrToolRegistrationBundle:Event:edit.html.twig', array(
            'form' => $form->createView(), 'event' => $event
        ));
    }

    /**
     * @Route("/{eventLinkName}", name="event_show")
     * @Template()
     * @param $eventLinkName
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction($eventLinkName)
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

        $roleCollection = $event->getRoleApprovals();
        $criteria = Criteria::create()
            ->where(Criteria::expr()->eq("showRole", true))
            ->andWhere(Criteria::expr()->gte("registration_endTime", new \DateTime("now")))
            ->orderBy(array("registration_endTime" => Criteria::ASC));
        $event->setRoleApprovals($roleCollection->matching($criteria));

        $user = $this->getUser();
        $registrations = null;
        if(isset($user)) {
            $qb2 = $em->createQueryBuilder();
            $qb2->select(array('r'))
                ->from('LJTrToolRegistrationBundle:Registration', 'r')
                ->where('r.event = ?1')
                ->andWhere('r.person = ?2')
                ->setParameter(1, $event->getEventId())
                ->setParameter(2, $this->getUser()->getPerson()->getPersonId());
            $query2 = $qb2->getQuery();
            $registrations = $query2->getResult();
        }


        return $this->render('LJTrToolRegistrationBundle:Event:show.html.twig', array('event'=> $event, 'registrations' => $registrations));
    }
}
