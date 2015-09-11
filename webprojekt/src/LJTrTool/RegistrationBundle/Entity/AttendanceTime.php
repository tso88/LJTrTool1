<?php
/**
 *
 *
 * @author Original Author: Tim Sochart
 * @author Further Authors:
 * @version 0.1 at 14.07.15 12:15
 * created on 14.07.15 12:15
 */

namespace LJTrTool\RegistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class AttendanceTime
 *
 * @ORM\Table(name="REGISTRATION_ATTENDANCETIME")
 * @ORM\Entity
 */
class AttendanceTime
{
    /**
     * @var integer
     *
     * @ORM\Column(name="attendanceTimeId", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $attendanceTimeId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="attendance_startTime", type="datetime", nullable=true)
     */
    private $attendance_startTime = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="attendance_endTime", type="datetime", nullable=true)
     */
    private $attendance_endTime = '0000-00-00 00:00:00';

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="LJTrTool\RegistrationBundle\Entity\RoleApproval", mappedBy="attendanceTimes")
     */
    private $roleApprovals;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="LJTrTool\RegistrationBundle\Entity\Registration", mappedBy="attendanceTimes")
     */
    private $registrations;

    /**
     * @var \LJTrTool\RegistrationBundle\Entity\Event
     * @ORM\ManyToOne(targetEntity="LJTrTool\RegistrationBundle\Entity\Event", inversedBy="roleApprovals")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="event", referencedColumnName="eventId")
     * })
     */
    private $event;

    /**
     * Add registration
     *
     * @param Registration $registration
     * @return \Doctrine\Common\Collections\Collection
     */
    public function addRegistration (Registration $registration)
    {
        $this->registrations[] = $registration;
        return $this;
    }

    /**
     * Add roleApproval
     *
     * @param RoleApproval $roleApproval
     * @return \Doctrine\Common\Collections\Collection
     */
    public function addRoleApproval(RoleApproval $roleApproval)
    {
        $this->roleApprovals[] = $roleApproval;
        return $this;
    }

    /**
     * @return int
     */
    public function getAttendanceTimeId()
    {
        return $this->attendanceTimeId;
    }

    /**
     * @param int $attendanceTimeId
     */
    public function setAttendanceTimeId($attendanceTimeId)
    {
        $this->attendanceTimeId = $attendanceTimeId;
    }

    /**
     * @return \DateTime
     */
    public function getAttendanceStartTime()
    {
        return $this->attendance_startTime;
    }

    /**
     * @param \DateTime $attendance_startTime
     */
    public function setAttendanceStartTime($attendance_startTime)
    {
        $this->attendance_startTime = $attendance_startTime;
    }

    /**
     * @return \DateTime
     */
    public function getAttendanceEndTime()
    {
        return $this->attendance_endTime;
    }

    /**
     * @param \DateTime $attendance_endTime
     */
    public function setAttendanceEndTime($attendance_endTime)
    {
        $this->attendance_endTime = $attendance_endTime;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRegistrations()
    {
        return $this->registrations;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $registrations
     */
    public function setRegistrations($registrations)
    {
        $this->registrations = $registrations;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRoleApprovals()
    {
        return $this->roleApprovals;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $roleApprovals
     */
    public function setRoleApprovals($roleApprovals)
    {
        $this->roleApprovals = $roleApprovals;
    }

    /**
     * Remove registration
     *
     * @param Registration $registration
     */
    public function removeRegistration(Registration $registration)
    {
        $this->registrations->removeElement($registration);
    }

    /**
     * Remove roleApproval
     *
     * @param RoleApproval $roleApproval
     */
    public function removeRoleApproval(RoleApproval $roleApproval)
    {
        $this->roleApprovals->removeElement($roleApproval);
    }

    /**
     * @return Event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param Event $event
     */
    public function setEvent($event)
    {
        $this->event = $event;
    }

    public function getTime()
    {
        if(empty($this->attendance_endTime) || $this->attendance_endTime == $this->attendance_startTime) {
            return $this->attendance_startTime->format('d.m.Y');
        } elseif($this->attendance_startTime->format('H:i') == '00:00' && $this->attendance_endTime->format('H:i') == '23:59') {
            if($this->attendance_startTime->format('d.m.Y') == $this->attendance_endTime->format('d.m.Y')) {
                return $this->attendance_startTime->format('d.m.Y');
            } else {
                return $this->attendance_startTime->format('d.m.Y') . " bis " . $this->attendance_startTime->format('d.m.Y');
            }
        } elseif($this->attendance_endTime->format('H:i') == '23:59') {
            if($this->attendance_startTime->format('d.m.Y') == $this->attendance_endTime->format('d.m.Y')) {
                return $this->attendance_startTime->format('d.m.Y') . " ab " . $this->attendance_startTime->format('H:i') . " Uhr ";
            } else {
                return $this->attendance_startTime->format('d.m.Y') . " von " . $this->attendance_startTime->format('H:i') . " Uhr bis " . $this->attendance_endTime->format('d.m.Y');
            }
        } elseif($this->attendance_startTime->format('H:i') == '00:00') {
            if($this->attendance_startTime->format('d.m.Y') == $this->attendance_endTime->format('d.m.Y')) {
                return $this->attendance_endTime->format('d.m.Y') . " bis " . $this->attendance_endTime->format('H:i') . " Uhr ";
            } else {
                return $this->attendance_startTime->format('d.m.Y')  . " bis " . $this->attendance_endTime->format('d.m.Y') . " " . $this->attendance_endTime->format('H:i') . " Uhr ";
            }
        } else {
            if($this->attendance_startTime->format('d.m.Y') == $this->attendance_endTime->format('d.m.Y')) {
                return $this->attendance_startTime->format('d.m.Y') . " von " . $this->attendance_startTime->format('H:i') . " bis " . $this->attendance_endTime->format('H:i') . " Uhr";
            } else {
                return $this->attendance_startTime->format('d.m.Y') . " " . $this->attendance_startTime->format('H:i') . " bis " . $this->attendance_endTime->format('d.m.Y') . " " . $this->attendance_endTime->format('H:i') . " Uhr";
            }
        }

    }
}