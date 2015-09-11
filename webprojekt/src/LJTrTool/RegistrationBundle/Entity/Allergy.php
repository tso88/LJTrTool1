<?php
/**
 *
 *
 * @author Original Author: Tim Sochart
 * @author Further Authors:
 * @version 0.1 at 18.02.15 20:40
 * created on 16.02.15 19:08
 */

namespace LJTrTool\RegistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Allergy
 *
 * @ORM\Table(name="REGISTRATION_ALLERGY")
 * @ORM\Entity
 */
class Allergy
{
    /**
     * @var integer
     *
     * @ORM\Column(name="allergyId", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $allergyId;

    /**
     * @var string
     *
     * @ORM\Column(name="allergyName", type="string", length=255, nullable=false)
     */
    private $allergyName;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="LJTrTool\RegistrationBundle\Entity\Person", mappedBy="allergies")
     */
    private $persons;

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
     * @return int
     */
    public function getAllergyId()
    {
        return $this->allergyId;
    }

    /**
     * @return string
     */
    public function getAllergyName()
    {
        return $this->allergyName;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPersons()
    {
        return $this->persons;
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
     * @param int $allergyId
     */
    public function setAllergyId($allergyId)
    {
        $this->allergyId = $allergyId;
    }

    /**
     * @param string $allergyName
     */
    public function setAllergyName($allergyName)
    {
        $this->allergyName = $allergyName;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $persons
     */
    public function setPersons($persons)
    {
        $this->persons = $persons;
    }
}