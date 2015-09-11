<?php
/**
 *
 *
 * @author Original Author: Tim Sochart
 * @author Further Authors:
 * @version 0.1 at 18.02.15 21:49
 * created on 14.02.15 22:22
 */

namespace LJTrTool\RegistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Class Person
 *
 * @ORM\Table(name="REGISTRATION_PERSON")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Person {
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(name="personId", type="bigint", nullable=false)
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $personId;
    
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     * @Assert\NotBlank()
     */
    private $name;
    
    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255, nullable=false)
     * @Assert\NotBlank()
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     * @Assert\Email()
     */
    private $email;

    /**
     * @var \Date
     *
     * @ORM\Column(name="birthday", type="date", nullable=false)
     * @Assert\DateTime()
     */
    private $birthday;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=1, nullable=false)
     * @Assert\NotBlank()
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", nullable=true)
     */
    private $phone;

    /**
     * @var \LJTrTool\RegistrationBundle\Entity\Address
     *
     * @ORM\ManyToOne(targetEntity="LJTrTool\RegistrationBundle\Entity\Address", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="address", referencedColumnName="addressId")
     * })
     */
    private $address;

    /**
 * @var \LJTrTool\RegistrationBundle\Entity\Division
 *
 * @ORM\ManyToOne(targetEntity="LJTrTool\RegistrationBundle\Entity\Division", inversedBy="persons")
 * @ORM\JoinColumns({
 *   @ORM\JoinColumn(name="division", referencedColumnName="divisionId")
 * })
 * @Assert\NotBlank()
 */
    private $division;

    /**
     * @var \LJTrTool\RegistrationBundle\Entity\Account
     *
     * @ORM\OneToMany(targetEntity="LJTrTool\RegistrationBundle\Entity\Account", mappedBy="person", cascade={"remove"})
     */
    private $accounts;

    /**
     * @var \LJTrTool\RegistrationBundle\Entity\Feeding
     * @ORM\ManyToOne(targetEntity="LJTrTool\RegistrationBundle\Entity\Feeding")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="feeding", referencedColumnName="feedingId")
     * })
     */
    private $feeding;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="LJTrTool\RegistrationBundle\Entity\Allergy", inversedBy="persons")
     * @ORM\JoinTable(name="REGISTRATION_PERSON_ALLERGY",
     *   joinColumns={
     *     @ORM\JoinColumn(name="PERSON", referencedColumnName="personId")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="ALLERGY", referencedColumnName="allergyId")
     *   }
     * )
     */
    private $allergies;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=true)
     */
    private $path;

    /**
     * @Assert\File(maxSize="6000000")
     */
    private $file;

    private $temp;

    /**
     * Add allergy
     *
     * @param Allergy $allergy
     * @return \Doctrine\Common\Collections\Collection
     */
    public function addAllergy(Allergy $allergy)
    {
        $this->allergies[] = $allergy;
        return $this;
    }

    /**
     * @return int
     */
    public function getPersonId()
    {
        return $this->personId;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return \Date
     */
    public function getBirthday()
    {
        return '23.11.1988';//$this->$birthday;
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return Division
     */
    public function getDivision()
    {
        return $this->division;
    }

    /**
     * @return Feeding
     */
    public function getFeeding()
    {
        return $this->feeding;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAllergies()
    {
        return $this->allergies;
    }

    /**
     * Remove allergy
     *
     * @param Allergy $allergy
     */
    public function removeAllergy(Allergy $allergy)
    {
        $this->allergies->removeElement($allergy);
    }

    /**
     * @param int $personId
     */
    public function setPersonId($personId)
    {
        $this->personId = $personId;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param \Date $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = \DateTime::createFromFormat('d.m.Y', $birthday);
    }

    /**
     * @param string $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @param Address $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @param Division $division
     */
    public function setDivision($division)
    {
        $this->division = $division;
    }

    /**
     * @param Feeding $feeding
     */
    public function setFeeding($feeding)
    {
        $this->feeding = $feeding;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $allergies
     */
    public function setAllergies($allergies)
    {
        $this->allergies = $allergies;
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }

    public function getAbsolutePath()
    {
        return null === $this->getPath()
            ? null
            : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path
            ? null
            : $this->getUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    public function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/pictures';
    }

    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
        // check if we have an old image path
        if (is_file($this->getAbsolutePath())) {
            // store the old name to delete after the update
            $this->temp = $this->getAbsolutePath();
        }
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        if (null !== $this->getFile()) {
            $this->path = $this->getFile()->guessExtension();
        }
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        if (null === $this->getFile()) {
            return;
        }

        // check if we have an old image
        if (isset($this->temp)) {
            unlink($this->temp);
            $this->temp = null;
        }
        $this->getFile()->move(
            $this->getUploadRootDir(),
            $this->personId.'.'.$this->getFile()->guessExtension()
        );

        $this->setFile(null);
    }

    /**
     * @ORM\PreRemove()
     */
    public function storeFilenameForRemove()
    {
        $this->temp = $this->getAbsolutePath();
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        $file = $this->getAbsolutePath();
        if ($file) {
            unlink($file);
        }
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->allergies = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Person
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @return Account
     */
    public function getAccounts()
    {
        return $this->accounts;
    }

    /**
     * @param Account $accounts
     */
    public function setAccounts($accounts)
    {
        $this->accounts = $accounts;
    }

    /**
     * @return string
     */
    public function getUniqueName()
    {
        return $this->getFirstname() . " "  . $this->getName() . " (" . $this->division->getDivisionName() . ")";
    }
}
