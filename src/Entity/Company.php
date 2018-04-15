<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Company
 *
 * @ORM\Table(name="company")
 * @ORM\Entity
 */
class Company
{
    /**
     * @var int
     *
     * @ORM\Column(name="company_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $companyId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_name", type="string", length=255, nullable=true)
     */
    private $companyName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="website", type="string", length=255, nullable=true)
     */
    private $website;

    /**
     * @var string|null
     *
     * @ORM\Column(name="logo", type="string", length=150, nullable=true)
     */
    private $logo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="portfolio", type="string", length=200, nullable=true)
     */
    private $portfolio;

    /**
     * @var int|null
     *
     * @ORM\Column(name="company_status", type="integer", nullable=true)
     */
    private $companyStatus = '0';

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


}
