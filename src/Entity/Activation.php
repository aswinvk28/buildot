<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activation
 *
 * @ORM\Table(name="activation")
 * @ORM\Entity
 */
class Activation {

    /**
     * @var int
     *
     * @ORM\Column(name="activation_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $activationId;

    /**
     * @var int|null
     *
     * @ORM\ManyToOne(targetEntity="Members")
     * @ORM\JoinColumn(name="member_id", referencedColumnName="member_id")
     */
    private $memberId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code", type="string", length=255, nullable=true)
     */
    private $code;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    public function getActivationId() 
    {
        return $this->activationId;
    }

    public function getMemberId() 
    {
        return $this->memberId;
    }

    public function getCode() 
    {
        return $this->code;
    }

    public function getCreated(): \DateTime 
    {
        return $this->created;
    }

    public function setActivationId($activationId) 
    {
        $this->activationId = $activationId;
    }

    public function setMemberId($memberId) 
    {
        $this->memberId = $memberId;
    }

    public function setCode($code) 
    {
        $this->code = $code;
    }

    public function setCreated(\DateTime $created) 
    {
        $this->created = $created;
    }


}
