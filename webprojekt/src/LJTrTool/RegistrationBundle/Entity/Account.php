<?php
/**
 *
 *
 * @author Original Author: Tim Sochart
 * @author Further Authors:
 * @version 0.1 at 13.07.15 12:01
 * created on 17.02.15 14:43
 */

namespace LJTrTool\RegistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Class Account
 *
 * @ORM\Table(name="REGISTRATION_LOGIN")
 * @ORM\Entity(repositoryClass="LJTrTool\RegistrationBundle\Entity\AccountRepository")
 */
class Account implements UserInterface, \Serializable
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=60, unique=true, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;

    /**
     * @var \LJTrTool\RegistrationBundle\Entity\Person
     *
     * @ORM\ManyToOne(targetEntity="LJTrTool\RegistrationBundle\Entity\Person", inversedBy="accounts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="person", referencedColumnName="personId")
     * })
     */
    private $person;

    public function __construct()
    {
        $this->isActive = true;
        // may not be needed, see section on salt below
        // $this->salt = md5(uniqid(null, true));
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getRoles()
    {
        return array('ROLE_USER', 'ROLE_ADMIN');
    }

    public function eraseCredentials()
    {
    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized);
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return Account
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Account
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Account
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return Account
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set person
     *
     * @param \LJTrTool\RegistrationBundle\Entity\Person $person
     * @return Account
     */
    public function setPerson(\LJTrTool\RegistrationBundle\Entity\Person $person = null)
    {
        $this->person = $person;

        return $this;
    }

    /**
     * Get person
     *
     * @return \LJTrTool\RegistrationBundle\Entity\Person 
     */
    public function getPerson()
    {
        return $this->person;
    }
}
