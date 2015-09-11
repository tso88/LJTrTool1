<?php

namespace LJTrTool\RegistrationBundle\Controller;

use LJTrTool\RegistrationBundle\Entity\Account;
use LJTrTool\RegistrationBundle\Entity\Person;
use LJTrTool\RegistrationBundle\Form\AccountType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * @Route("/")
 */
class AccountController extends Controller
{
    /**
     * @Route("accounts", name="account_index")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $accounts = $em->getRepository('LJTrToolRegistrationBundle:Account')->findall();

        return $this->render('LJTrToolRegistrationBundle:Account:index.html.twig', array('accounts'=> $accounts));
    }

    /**
     * @Route("account/{accountId}", name="account_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($accountId)
    {
        $em = $this->getDoctrine()->getManager();
        $account = $em->getRepository('LJTrToolRegistrationBundle:Account')->find($accountId);

        return $this->render('LJTrToolRegistrationBundle:Account:show.html.twig', array('account'=> $account));
    }


    /**
     * @Route("account/{accountId}/delete")
     * @Method("GET")
     * @Template()
     */
    public function deleteAction($accountId)
    {
        $em = $this->getDoctrine()->getManager();
        $account = $em->getRepository('LJTrToolRegistrationBundle:Account')->find($accountId);
        if(!empty($account)) {
            $em->remove($account);
            $em->flush();
        }
        return $this->redirectToRoute('account_index');
    }


    /**
     * @Route("account/new", name="createAccount")
     * @Method("POST")
     * @Template()
     */
    public function createAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(new AccountType(), new Account());
        $form->handleRequest($request);

        if ($form->isValid()) {
            $account = $form->getData();
            $em->persist($account);
            $em->flush();
            return $this->redirectToRoute('account_show', array('accountId' => $account->getAccountId()));
        }

        return $this->render('LJTrToolRegistrationBundle:Account:new.html.twig', array(
            'form' => $form->createView(),
        ));
	}

    /**
     * @Route("account/change", name="changeAccount")
     * @Method("POST")
     * @Template()
     */
    public function changeAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(new AccountType(), new Account());
        $form->handleRequest($request);

        if ($form->isValid()) {
            $account = $form->getData();
            $em->merge($account);
            $em->flush();
            return $this->redirectToRoute('account_show', array('accountId' => $account->getId()));
        }

        return $this->redirectToRoute('account_edit', array('accountId' => $account->getId()));
    }
	
	/**
     * @Route("account/")
	 * @Method("GET")
     * @Template()
     */
    public function newFormAction()
    {
        $account = new Account();
        $form = $this->createForm(new AccountType(), $account, array('action' => $this->generateUrl('accountPerson')));
		return $this->render('LJTrToolRegistrationBundle:Account:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("account/{accountId}/edit", name="account_edit")
     * @Template()
     */
    public function editFormAction($accountId)
    {
        $em = $this->getDoctrine()->getManager();
        $account = $em->getRepository('LJTrToolRegistrationBundle:Account')->find($accountId);
        $form = $this->createForm(new PersonType(), $account, array('action' => $this->generateUrl('changeAccount')));
        return $this->render('LJTrToolRegistrationBundle:Account:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
