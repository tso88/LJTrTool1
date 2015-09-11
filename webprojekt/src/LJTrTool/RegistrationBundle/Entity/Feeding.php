<?php
/**
 *
 *
 * @author Original Author: Tim Sochart
 * @author Further Authors:
 * @version 0.1 at 18.02.15 21:51
 * created on 16.02.15 19:05
 */

namespace LJTrTool\RegistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Feeding
 *
 * @ORM\Table(name="REGISTRATION_FEEDING")
 * @ORM\Entity
 */
class Feeding {
    /**
     * @var integer
     *
     * @ORM\Column(name="feedingId", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $feedingId;

    /**
     * @var string
     *
     * @ORM\Column(name="feedingName", type="string", length=255, nullable=false)
     */
    private $feedingName;

    /**
     * @return int
     */
    public function getFeedingId()
    {
        return $this->feedingId;
    }

    /**
     * @return string
     */
    public function getFeedingName()
    {
        return $this->feedingName;
    }

    /**
     * @param int $feedingId
     */
    public function setFeedingId($feedingId)
    {
        $this->feedingId = $feedingId;
    }

    /**
     * @param string $feedingName
     */
    public function setFeedingName($feedingName)
    {
        $this->feedingName = $feedingName;
    }


}