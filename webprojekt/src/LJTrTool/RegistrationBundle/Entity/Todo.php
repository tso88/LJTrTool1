<?php
/**
 *
 *
 * @author Original Author: Tim Sochart
 * @author Further Authors:
 * @version 0.1 at 14.07.15 21:09
 * created on 14.07.15 21:09
 */

namespace LJTrTool\RegistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Todo
 *
 * @ORM\Table(name="TODO")
 * @ORM\Entity
 */
class Todo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="todoId", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $todoId;

    /**
     * @var string
     *
     * @ORM\Column(name="todo", type="string", length=255, nullable=false)
     */
    private $todo;

    /**
     * @var \LJTrTool\RegistrationBundle\Entity\TodoCategory
     * @ORM\ManyToOne(targetEntity="LJTrTool\RegistrationBundle\Entity\TodoCategory", inversedBy="todos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="todoCategory", referencedColumnName="todoCategoryId")
     * })
     */
    private $todoCategory;

    /**
     * @return int
     */
    public function getTodoId()
    {
        return $this->todoId;
    }

    /**
     * @param int $todoId
     */
    public function setTodoId($todoId)
    {
        $this->todoId = $todoId;
    }

    /**
     * @return string
     */
    public function getTodo()
    {
        return $this->todo;
    }

    /**
     * @param string $todo
     */
    public function setTodo($todo)
    {
        $this->todo = $todo;
    }

    /**
     * @return TodoGroup
     */
    public function getTodoGroup()
    {
        return $this->todoGroup;
    }

    /**
     * @param TodoGroup $todoGroup
     */
    public function setTodoGroup($todoGroup)
    {
        $this->todoGroup = $todoGroup;
    }

}