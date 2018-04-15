<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users", indexes={@ORM\Index(name="FK_users", columns={"usertype"})})
 * @ORM\Entity
 */
class Users
{
    const BLOCKED = -1;
    const DEACTIVATED = 0;
    const ACTIVATED = 1;
    const PUBLISHED = 2;
    
    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=true)
     */
    private $password;

    /**
     * @var int|null
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="modified", type="datetime", nullable=true)
     */
    private $modified;

    /**
     * @var \Usertype
     *
     * @ORM\ManyToOne(targetEntity="Usertype")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usertype", referencedColumnName="usertype")
     * })
     */
    private $usertype;


}
