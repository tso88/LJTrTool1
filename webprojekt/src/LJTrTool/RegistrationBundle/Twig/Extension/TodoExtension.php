<?php

namespace LJTrTool\RegistrationBundle\Twig\Extension;

use Symfony\Bridge\Doctrine\RegistryInterface;

class TodoExtension extends \Twig_Extension
{
    protected $doctrine;

    /**
     * @return RegistryInterface
     */
    public function getDoctrine()
    {
        return $this->doctrine;
    }

    public function __construct(RegistryInterface $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function getName()
    {
        return 'todo';
    }

    public function getTodoCount()
    {
        $qb_todo = $this->getDoctrine()->getManager()->createQueryBuilder();
        $qb_todo->select(array('t'))
            ->from('LJTrToolRegistrationBundle:Todo', 't')
            ->leftJoin('LJTrToolRegistrationBundle:TodoCategory', 'tc')
            ->where('tc.todoCategoryName = ?1')
            ->setParameter(1, "Registration");
        $query_todo = $qb_todo->getQuery();
        $todos = $query_todo->getResult();

        return count($todos);
    }

    /**
     * @return mixed
     */
    public function getTodos() {
        $qb_todo = $this->getDoctrine()->getManager()->createQueryBuilder();
        $qb_todo->select(array('t'))
            ->from('LJTrToolRegistrationBundle:Todo', 't')
            ->leftJoin('LJTrToolRegistrationBundle:TodoCategory', 'tc')
            ->where('tc.todoCategoryName = ?1')
            ->orderBy('t.todo', 'ASC')
            ->setParameter(1, "Registration");
        $query_todo = $qb_todo->getQuery();
        $todos = $query_todo->getResult();

        return $todos;
    }

    public function getFunctions()
    {
        return array(
            'getTodoCount' => new \Twig_Function_Method($this, 'getTodoCount'),
            'getTodos' => new \Twig_Function_Method($this, 'getTodos')
        );
    }

}