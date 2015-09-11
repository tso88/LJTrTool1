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
 * TodoCategory
 *
 * @ORM\Table(name="TODO_CATEGORY")
 * @ORM\Entity
 */
class TodoCategory
{
    /**
     * @var integer
     *
     * @ORM\Column(name="todoCategoryId", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $todoCategoryId;



    /**
     * @var string
     *
     * @ORM\Column(name="todoCategoryName", type="string", length=255, nullable=false)
     */
    private $todoCategoryName;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="LJTrTool\RegistrationBundle\Entity\Todo", mappedBy="todoCategory")
     **/
    private $todos;
    

    /**
     * Add todo
     *
     * @param Todo $todo
     * @return \Doctrine\Common\Collections\Collection
     */
    public function addTodo(Todo $todo)
    {
        $this->todos[] = $todo;
        return $this;
    }

    /**
     * @return int
     */
    public function getTodoCategoryId()
    {
        return $this->todoCategoryId;
    }

    /**
     * @return string
     */
    public function getTodoCategoryName()
    {
        return $this->todoCategoryName;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTodos()
    {
        return $this->todos;
    }
    
    /**
     * Remove todo
     *
     * @param Todo $todo
     */
    public function removeTodo(Todo $todo)
    {
        $this->todos->removeElement($todo);
    }

    /**
     * @param int $todoCategoryId
     */
    public function setTodoCategoryId($todoCategoryId)
    {
        $this->todoCategoryId = $todoCategoryId;
    }

    /**
     * @param string $todoCategoryName
     */
    public function setTodoCategoryName($todoCategoryName)
    {
        $this->todoCategoryName = $todoCategoryName;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $todos
     */
    public function setTodos($todos)
    {
        $this->todos = $todos;
    }
}