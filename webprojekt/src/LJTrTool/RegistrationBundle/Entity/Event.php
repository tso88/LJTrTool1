<?php
/**
 *
 *
 * @author Original Author: Tim Sochart
 * @author Further Authors:
 * @version 0.1 at 18.02.15 21:49
 * created on 15.02.15 18:44
 */

namespace LJTrTool\RegistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Event
 *
 * @ORM\Table(name="REGISTRATION_EVENT")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Event {
    /**
     * @var integer
     *
     * @ORM\Column(name="eventId", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $eventId;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="eventLinkName", type="string", length=25, nullable=false)
     */
    private $eventLinkName;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="eventName", type="string", length=255, nullable=false)
     */
    private $eventName;

    /**
     * @var \DateTime
     * 
     * @ORM\Column(name="startTime", type="datetime", nullable=true)
     * @Assert\Date()
     */
    private $startTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="endTime", type="datetime", nullable=true)
     * @Assert\Date()
     */
    private $endTime;

    /**
     * @var string
     *
     * @ORM\Column(name="place", type="string", length=50, nullable=false)
     */
    private $place;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=2500, nullable=true)
     */
    private $description;

    /**
     * @var \DateTime $created
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var \DateTime updated
     *
     * @ORM\Column(name="updated", type="datetime", nullable=true)
     */
    private $updated;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="LJTrTool\RegistrationBundle\Entity\DivisionApproval", mappedBy="event")
     * @Assert\Type(type="LJTrTool\RegistrationBundle\Entity\DivisionApproval")
     * @Assert\Valid()
     **/
    private $divisionApprovals;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="LJTrTool\RegistrationBundle\Entity\RoleApproval", mappedBy="event")
     * @ORM\OrderBy({"showRole" = "DESC", "registration_endTime" = "ASC"})
     * @Assert\Type(type="LJTrTool\RegistrationBundle\Entity\RoleApproval")
     * @Assert\Valid()
     **/
    private $roleApprovals;

    /**
     * @ORM\PrePersist
     */
    public function onCreation()
    {
        $this->setCreated(new \DateTime("now"));
    }

    /**
     * @ORM\PreUpdate
     */
    public function onUpdate()
    {
        $this->setUpdated(new \DateTime("now"));
    }

    /**
     * Add divisionApproval
     *
     * @param DivisionApproval $divisionApproval
     * @return \Doctrine\Common\Collections\Collection
     */
    public function addDivisionApproval(DivisionApproval $divisionApproval)
    {
        $this->divisionApprovals[] = $divisionApproval;
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
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDivisionApprovals()
    {
        return $this->divisionApprovals;
    }

    /**
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @return int
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * @return string
     */
    public function getEventLinkName()
    {
        return $this->eventLinkName;
    }

    /**
     * @return string
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRoleApprovals()
    {
        return $this->roleApprovals;
    }

    /**
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Remove divisionApproval
     *
     * @param DivisionApproval $divisionApproval
     */
    public function removeDivisionApproval(DivisionApproval $divisionApproval)
    {
        $this->divisionApprovals->removeElement($divisionApproval);
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
     * @param \Doctrine\Common\Collections\Collection $divisionApprovals
     */
    public function setDivisionApprovals($divisionApprovals)
    {
        $this->divisionApprovals = $divisionApprovals;
    }

    /**
     * @param \DateTime $endTime
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }

    /**
     * @param int $eventId
     */
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;
    }

    /**
     * @param string $eventLinkName
     */
    public function setEventLinkName($eventLinkName)
    {
        $this->eventLinkName = $eventLinkName;
    }

    /**
     * @param string $eventName
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $roleApprovals
     */
    public function setRoleApprovals($roleApprovals)
    {
        $this->roleApprovals = $roleApprovals;
    }

    /**
     * @param \DateTime $startTime
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
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
     * @return string
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * @param string $place
     */
    public function setPlace($place)
    {
        $this->place = $place;
    }

    /**
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param \DateTime $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param \DateTime $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }


}