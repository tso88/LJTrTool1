<?php
/**
 *
 *
 * @author Original Author: Tim Sochart
 * @author Further Authors:
 * @version 0.1 at 18.02.15 20:52
 * created on 15.02.15 18:49
 */

namespace LJTrTool\RegistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Division
 *
 * @ORM\Table(name="REGISTRATION_DIVISION")
 * @ORM\Entity
 */
class Division
{
    /**
     * @var integer
     *
     * @ORM\Column(name="divisionId", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $divisionId;

    /**
     * @var string
     *
     * @ORM\Column(name="divisionName", type="string", length=255, nullable=false)
     */
    private $divisionName;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="LJTrTool\RegistrationBundle\Entity\Person", mappedBy="division")
     **/
    private $persons;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="LJTrTool\RegistrationBundle\Entity\DivisionApproval", mappedBy="division")
     **/
    private $approvals;

    /**
     * Add person
     *
     * @param Person $person
     * @return \Doctrine\Common\Collections\Collection
     */
    public function addPerson(Person $person)
    {
        $this->persons[] = $person;
        return $this;
    }

    /**
     * Add approval
     *
     * @param DivisionApproval $approval
     * @return \Doctrine\Common\Collections\Collection
     */
    public function addApproval(DivisionApproval $approval)
    {
        $this->approvals[] = $approval;
        return $this;
    }

    /**
     * @return int
     */
    public function getDivisionId()
    {
        return $this->divisionId;
    }

    /**
     * @return string
     */
    public function getDivisionName()
    {
        return $this->divisionName;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPersons()
    {
        return $this->persons;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getApprovals()
    {
        return $this->approvals;
    }

    /**
     * Remove person
     *
     * @param Person $person
     */
    public function removePerson(Person $person)
    {
        $this->persons->removeElement($person);
    }

    /**
     * Remove approval
     *
     * @param DivisionApproval $approval
     */
    public function removeApproval(DivisionApproval $approval)
    {
        $this->approvals->removeElement($approval);
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $approvals
     */
    public function setApprovals($approvals)
    {
        $this->approvals = $approvals;
    }

    /**
     * @param int $divisionId
     */
    public function setDivisionId($divisionId)
    {
        $this->divisionId = $divisionId;
    }

    /**
     * @param string $divisionName
     */
    public function setDivisionName($divisionName)
    {
        $this->divisionName = $divisionName;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $persons
     */
    public function setPersons($persons)
    {
        $this->persons = $persons;
    }
}