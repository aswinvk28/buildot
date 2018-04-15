<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usertype
 *
 * @ORM\Table(name="usertype")
 * @ORM\Entity
 */
class Usertype
{
    const MEMBER = 'member';
    
    /**
     * @var int
     *
     * @ORM\Column(name="usertype", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $usertype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="usertypename", type="string", length=15, nullable=true)
     */
    private $usertypename;

    
    
}
