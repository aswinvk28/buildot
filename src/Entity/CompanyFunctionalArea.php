<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompanyFunctionalArea
 *
 * @ORM\Table(name="company_functional_area")
 * @ORM\Entity
 */
class CompanyFunctionalArea
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
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;


}
