<?php
/**
 *
 *
 * @author Original Author: Tim Sochart
 * @author Further Authors:
 * @version 0.1 at 14.07.15 12:33
 * created on 16.02.15 19:19
 */

namespace LJTrTool\RegistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class RoleApproval
 *
 * @ORM\Table(name="REGISTRATION_ROLEAPPROVAL")
 * @ORM\Entity
 *
 */
class RoleApproval {

    /**
     * @ORM\Id
     * @var integer
     * @ORM\Column(name="roleApprovalId", unique=true)
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $roleApprovalId;

    /**
     * @var \LJTrTool\RegistrationBundle\Entity\Role
     * @ORM\ManyToOne(targetEntity="LJTrTool\RegistrationBundle\Entity\Role", inversedBy="approvals")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="role", referencedColumnName="roleId")
     * })
     */
    private $role;

    /**
     * @var \LJTrTool\RegistrationBundle\Entity\Event
     * @ORM\ManyToOne(targetEntity="LJTrTool\RegistrationBundle\Entity\Event", inversedBy="roleApprovals")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="event", referencedColumnName="eventId")
     * })
     */
    private $event;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="registration_startTime", type="datetime", nullable=true)
     */
    private $registration_startTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="registration_endTime", type="datetime", nullable=true)
     */
    private $registration_endTime;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="LJTrTool\RegistrationBundle\Entity\AttendanceTime", inversedBy="roleApprovals")
     * @ORM\JoinTable(name="REGISTRATION_ROLEAPPROVAL_ATTENDANCETIME",
     *   joinColumns={
     *     @ORM\JoinColumn(name="ATTENDANCETIME_ROLEAPPROVAL", referencedColumnName="roleApprovalId")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="ROLEAPPROVAL_ATTENDANCETIME", referencedColumnName="attendanceTimeId")
     *   }
     * )
     */
    private $attendanceTimes;

    /**
     * @var boolean
     *
     * @ORM\Column(name="showRole", type="boolean", nullable=true)
     */
    private $showRole = true;

    /**
     * @return int
     */
    public function getRoleApprovalId()
    {
        return $this->roleApprovalId;
    }

    /**
     * @return Role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @return Event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @return \DateTime
     */
    public function getRegistrationStartTime()
    {
        return $this->registration_startTime;
    }

    /**
     * @return \DateTime
     */
    public function getRegistrationEndTime()
    {
        return $this->registration_endTime;
    }

    /**
     * @param int $roleApprovalId
     */
    public function setRoleApprovalId($roleApprovalId)
    {
        $this->roleApprovalId = $roleApprovalId;
    }

    /**
     * @param Role $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @param Event $event
     */
    public function setEvent($event)
    {
        $this->event = $event;
    }

    /**
     * @param \DateTime $registration_startTime
     */
    public function setRegistrationStartTime($registration_startTime)
    {
        $this->registration_startTime = $registration_startTime;
    }

    /**
     * @param \DateTime $registration_endTime
     */
    public function setRegistrationEndTime($registration_endTime)
    {
        $this->registration_endTime = $registration_endTime;
    }

    /**
     * @return boolean
     */
    public function isShowRole()
    {
        return $this->showRole;
    }

    /**
     * @param boolean $showRole
     */
    public function setShowRole($showRole)
    {
        $this->showRole = $showRole;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAttendanceTimes()
    {
        return $this->attendanceTimes;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $attendanceTimes
     */
    public function setAttendanceTimes($attendanceTimes)
    {
        $this->attendanceTimes = $attendanceTimes;
    }

    /**
     * Add attendanceTime
     *
     * @param AttendanceTime $attendanceTime
     * @return \Doctrine\Common\Collections\Collection
     * @internal param AttendanceTime $attendanceTimes
     */
    public function addAttendanceTime(AttendanceTime $attendanceTime)
    {
        $this->attendanceTimes[] = $attendanceTime;
        $attendanceTime->addRoleApproval($this);
        return $this;
    }

    /**
     * Remove attendanceTime
     *
     * @param AttendanceTime $attendanceTime
     */
    public function removeAttendanceTime(AttendanceTime $attendanceTime)
    {
        $attendanceTime->removeRoleApproval($this);
        $this->attendanceTimes->removeElement($attendanceTime);
    }

    public function __toString()
    {
        return $this->getRole()->getDisplayName();
    }

}