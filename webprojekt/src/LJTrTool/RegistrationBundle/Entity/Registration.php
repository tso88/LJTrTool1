<?php
/**
 *
 *
 * @author Original Author: Tim Sochart
 * @author Further Authors:
 * @version 0.2 at 14.07.15 13:24
 * created on 16.02.15 23:14
 */

namespace LJTrTool\RegistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Registration
 *
 * @ORM\Table(name="REGISTRATION_REGISTRATION")
 * @ORM\Entity
 */
class Registration {
    /**
     * @var integer
     *
     * @ORM\Column(name="registrationId", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $registrationId;

    /**
     * @var \LJTrTool\RegistrationBundle\Entity\RoleApproval
     * @ORM\ManyToOne(targetEntity="LJTrTool\RegistrationBundle\Entity\RoleApproval")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="roleApproval", referencedColumnName="roleApprovalId")
     * })
     */
    private $roleApproval;

    /**
     * @var \LJTrTool\RegistrationBundle\Entity\Event
     * @ORM\ManyToOne(targetEntity="LJTrTool\RegistrationBundle\Entity\Event")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="event", referencedColumnName="eventId")
     * })
     */
    private $event;

    /**
     * @var \LJTrTool\RegistrationBundle\Entity\Person
     * @ORM\ManyToOne(targetEntity="LJTrTool\RegistrationBundle\Entity\Person")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="person", referencedColumnName="personId")
     * })
     */
    private $person;

    /**
     * @var boolean
     *
     * @ORM\Column(name="approval", type="boolean", nullable=true)
     */
    private $approval;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="registrationTime", type="datetime", nullable=true)
     */
    private $registrationTime;

    /**
     * @var boolean
     *
     * @ORM\Column(name="realRegistration", type="boolean", nullable=false)
     */
    private $realRegistration;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="LJTrTool\RegistrationBundle\Entity\AttendanceTime", inversedBy="registrations")
     * @ORM\JoinTable(name="REGISTRATION_REGISTRATION_ATTENDANCETIME",
     *   joinColumns={
     *     @ORM\JoinColumn(name="ATTENDANCETIME_REGISTRATION", referencedColumnName="registrationId")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="REGISTRATION_ATTENDANCETIME", referencedColumnName="attendanceTimeId")
     *   }
     * )
     */
    private $attendanceTimes;

    /**
     * Registration constructor.
     */
    public function __construct()
    {
        $this->registrationTime = new \DateTime();
        $this->realRegistration = 1;
        $this->approval = 0;
    }

    /**
     * @return boolean
     */
    public function isApproval()
    {
        return $this->approval;
    }

    /**
     * @param boolean $approval
     */
    public function setApproval($approval)
    {
        $this->approval = $approval;
    }

    /**
     * @return RoleApproval
     */
    public function getRoleApproval()
    {
        return $this->roleApproval;
    }

    /**
     * @return Event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @return Person
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * @return \DateTime
     */
    public function getRegistrationTime()
    {
        return $this->registrationTime;
    }

    /**
     * @return boolean
     */
    public function isRealRegistration()
    {
        return $this->realRegistration;
    }

    /**
     * @param RoleApproval $roleApproval
     */
    public function setRoleApproval($roleApproval)
    {
        $this->roleApproval = $roleApproval;
    }

    /**
     * @param Event $event
     */
    public function setEvent($event)
    {
        $this->event = $event;
    }

    /**
     * @param Person $person
     */
    public function setPerson($person)
    {
        $this->person = $person;
    }

    /**
     * @param \DateTime $registrationTime
     */
    public function setRegistrationTime($registrationTime)
    {
        $this->registrationTime = $registrationTime;
    }

    /**
     * @param boolean $realRegistration
     */
    public function setRealRegistration($realRegistration)
    {
        $this->realRegistration = $realRegistration;
    }

    /**
     * @return int
     */
    public function getRegistrationId()
    {
        return $this->registrationId;
    }

    /**
     * @param int $registrationId
     */
    public function setRegistrationId($registrationId)
    {
        $this->registrationId = $registrationId;
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
        $attendanceTime->addRegistration($this);
        return $this;
    }

    /**
     * Remove attendanceTime
     *
     * @param AttendanceTime $attendanceTime
     */
    public function removeAttendanceTime(AttendanceTime $attendanceTime)
    {
        $attendanceTime->removeRegistration($this);
        $this->attendanceTimes->removeElement($attendanceTime);
    }
}