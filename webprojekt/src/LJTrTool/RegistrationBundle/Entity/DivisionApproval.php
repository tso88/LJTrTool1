<?php
/**
 *
 *
 * @author Original Author: Tim Sochart
 * @author Further Authors:
 * @version 0.1 at 18.02.15 20:52
 * created on 16.02.15 19:19
 */

namespace LJTrTool\RegistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Approval
 *
 * @ORM\Table(name="REGISTRATION_DIVISION_APPROVAL")
 * @ORM\Entity
 */
class DivisionApproval
{
    /**
     * @var \LJTrTool\RegistrationBundle\Entity\Division
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="LJTrTool\RegistrationBundle\Entity\Division", inversedBy="approvals")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="division", referencedColumnName="divisionId")
     * })
     */
    private $division;

    /**
     * @var \LJTrTool\RegistrationBundle\Entity\Event
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="LJTrTool\RegistrationBundle\Entity\Event", inversedBy="divisionApprovals")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="event", referencedColumnName="eventId")
     * })
     */
    private $event;

    /**
     * @var string
     *
     * @ORM\Column(name="contract", type="string", length=255, nullable=false)
     */
    private $contract;

    /**
     * @return string
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * @return Division
     */
    public function getDivision()
    {
        return $this->division;
    }

    /**
     * @return Event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param string $contract
     */
    public function setContract($contract)
    {
        $this->contract = $contract;
    }

    /**
     * @param Division $division
     */
    public function setDivision($division)
    {
        $this->division = $division;
    }

    /**
     * @param Event $event
     */
    public function setEvent($event)
    {
        $this->event = $event;
    }
}