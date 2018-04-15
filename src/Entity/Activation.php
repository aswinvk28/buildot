<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activation
 *
 * @ORM\Table(name="activation")
 * @ORM\Entity
 */
class Activation
{
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


}
