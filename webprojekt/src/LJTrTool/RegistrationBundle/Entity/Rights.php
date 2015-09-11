<?php
/**
 *
 *
 * @author Original Author: Tim Sochart
 * @author Further Authors:
 * @version 0.1 at 19.02.15 19:22
 * created on 17.02.15 12:58
 */

namespace LJTrTool\RegistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Rights
 *
 * @ORM\Table(name="REGISTRATION_RIGHTS")
 * @ORM\Entity
 */
class Rights {
    /**
     * @var integer
     *
     * @ORM\Column(name="rightsId", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rightsId;

    /**
     * @var string
     *
     * @ORM\Column(name="module", type="string", length=50, nullable=false)
     */
    private $module;

    /**
     * @var string
     *
     * @ORM\Column(name="controller", type="string", length=50, nullable=false)
     */
    private $controller;

    /**
     * @var string
     *
     * @ORM\Column(name="function", type="string", length=50, nullable=false)
     */
    private $function;

    /**
     * @var boolean
     *
     * @ORM\Column(name="read", type="boolean", nullable=true)
     */
    private $read = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="write", type="boolean", nullable=true)
     */
    private $write = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="privilege", type="boolean", nullable=true)
     */
    private $privilege = '0';

    /**
     * @var \LJTrTool\RegistrationBundle\Entity\Role
     *
     * @ORM\ManyToOne(targetEntity="LJTrTool\RegistrationBundle\Entity\Role")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="role", referencedColumnName="roleId")
     * })
     */
    private $role;

    /**
     * @return int
     */
    public function getRightsId()
    {
        return $this->rightsId;
    }

    /**
     * @return string
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * @return string
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * @return string
     */
    public function getFunction()
    {
        return $this->function;
    }

    /**
     * @return boolean
     */
    public function isRead()
    {
        return $this->read;
    }

    /**
     * @return boolean
     */
    public function isWrite()
    {
        return $this->write;
    }

    /**
     * @return boolean
     */
    public function isPrivilege()
    {
        return $this->privilege;
    }

    /**
     * @return Role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param int $rightsId
     */
    public function setRightsId($rightsId)
    {
        $this->rightsId = $rightsId;
    }

    /**
     * @param string $module
     */
    public function setModule($module)
    {
        $this->module = $module;
    }

    /**
     * @param string $controller
     */
    public function setController($controller)
    {
        $this->controller = $controller;
    }

    /**
     * @param string $function
     */
    public function setFunction($function)
    {
        $this->function = $function;
    }

    /**
     * @param boolean $read
     */
    public function setRead($read)
    {
        $this->read = $read;
    }

    /**
     * @param boolean $write
     */
    public function setWrite($write)
    {
        $this->write = $write;
    }

    /**
     * @param boolean $privilege
     */
    public function setPrivilege($privilege)
    {
        $this->privilege = $privilege;
    }

    /**
     * @param Role $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }
}