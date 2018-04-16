<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ForgetPassword
 *
 * @ORM\Table(name="forget_password")
 * @ORM\Entity
 */
class ForgetPassword
{
    /**
     * @var int
     *
     * @ORM\Column(name="fid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="userId", type="integer", nullable=true)
     */
    private $userid;

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

    public function getFid() 
    {
        return $this->fid;
    }

    public function getUserid() 
    {
        return $this->userid;
    }

    public function getCode() 
    {
        return $this->code;
    }

    public function getCreated(): \DateTime 
    {
        return $this->created;
    }

    public function setFid($fid) 
    {
        $this->fid = $fid;
    }

    public function setUserid($userid) 
    {
        $this->userid = $userid;
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
