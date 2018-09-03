<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityVariable
 *
 * @ORM\Table(name="variable", uniqueConstraints={@ORM\UniqueConstraint(name="name", columns={"name"})})
 * @ORM\Entity
 */
class Variable
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="blob", length=65535, nullable=false)
     */
    private $value;


}
