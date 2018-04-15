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


}
