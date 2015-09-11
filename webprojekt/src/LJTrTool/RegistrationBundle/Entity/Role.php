<?php
/**
 *
 *
 * @author Original Author: Tim Sochart
 * @author Further Authors:
 * @version 0.1 at 19.02.15 19:32
 * created on 16.02.15 20:36
 */

namespace LJTrTool\RegistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Role
 *
 * @ORM\Table(name="REGISTRATION_ROLE")
 * @ORM\Entity
 */
class Role {
    /**
     * @var integer
     *
     * @ORM\Column(name="roleId", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $roleId;

    /**
     * @var string
     *
     * @ORM\Column(name="roleName", type="string", length=25, nullable=false)
     */
    private $roleName;

    /**
     * @var string
     *
     * @ORM\Column(name="displayName", type="string", length=50, nullable=false)
     */
    private $displayName;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=2500, nullable=true)
     */
    private $description;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="LJTrTool\RegistrationBundle\Entity\Condition", inversedBy="roles", cascade={"all"})
     * @ORM\JoinTable(name="REGISTRATION_ROLE_CONDITION",
     *   joinColumns={
     *     @ORM\JoinColumn(name="COND_ROLE", referencedColumnName="roleId")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="ROLE_CONDITION", referencedColumnName="conditionId")
     *   }
     * )
     */
    private $conditions;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="LJTrTool\RegistrationBundle\Entity\RoleApproval", mappedBy="role")
     **/
    private $approvals;

    /**
     * Add condition
     *
     * @param Condition $condition
     * @return \Doctrine\Common\Collections\Collection
     */
    public function addCondition(Condition $condition)
    {
        $this->conditions[] = $condition;
        $condition->addRole($this);
        return $this;
    }

    /**
     * Add approval
     *
     * @param RoleApproval $approval
     * @return \Doctrine\Common\Collections\Collection
     */
    public function addApproval(RoleApproval $approval)
    {
        $this->approvals[] = $approval;
        return $this;
    }

    /**
     * @return int
     */
    public function getRoleId()
    {
        return $this->roleId;
    }

    /**
     * @return string
     */
    public function getRoleName()
    {
        return $this->roleName;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getApprovals()
    {
        return $this->approvals;
    }

    /**
     * Remove condition
     *
     * @param Condition $condition
     */
    public function removeCondition(Condition $condition)
    {
        $condition->removeRole($this);
        $this->conditions->removeElement($condition);
    }

    /**
     * Remove approval
     *
     * @param RoleApproval $approval
     */
    public function removeApproval(RoleApproval $approval)
    {
        $this->approvals->removeElement($approval);
    }

    /**
     * @param int $roleId
     */
    public function setRoleId($roleId)
    {
        $this->roleId = $roleId;
    }

    /**
     * @param string $roleName
     */
    public function setRoleName($roleName)
    {
        $this->roleName = $roleName;
    }

    /**
     * @param string $displayName
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $conditions
     */
    public function setConditions($conditions)
    {
        $this->conditions = $conditions;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $approvals
     */
    public function setApprovals($approvals)
    {
        $this->approvals = $approvals;
    }

    public function getId() {
        return $this->getRoleId();
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->conditions = new \Doctrine\Common\Collections\ArrayCollection();
        $this->approvals = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function unsetRoleId() {
        unset($this->roleId);
    }

    public function equals($role) {
        if($this->getRoleId() == $role->getRoleId() && $this->getDisplayName() == $role->getDisplayName()
            && $this->getRoleName() == $role->getRoleName() && $this->getDescription() == $role->getDescription()
            && $this->getConditions().__toString() == $role->getConditions().__toString()
            && $this->getApprovals().__>toString() == $role->getConditions().__toString()
        ) {
            return true;
        } else {
            return false;
        }
    }

}
