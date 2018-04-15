<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projects
 *
 * @ORM\Table(name="projects", indexes={@ORM\Index(name="FK_projects", columns={"member_id"}), @ORM\Index(name="FK_projects_countries", columns={"countryId"})})
 * @ORM\Entity
 */
class Projects
{
    /**
     * @var int
     *
     * @ORM\Column(name="project_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $projectId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="project_ref_no", type="string", length=15, nullable=true)
     */
    private $projectRefNo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="project_name", type="string", length=150, nullable=true)
     */
    private $projectName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="project_location", type="string", length=150, nullable=true)
     */
    private $projectLocation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="location_map", type="string", length=150, nullable=true)
     */
    private $locationMap;

    /**
     * @var int|null
     *
     * @ORM\Column(name="max_alloc_budget", type="integer", nullable=true)
     */
    private $maxAllocBudget;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="opening_date", type="date", nullable=true)
     */
    private $openingDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="closing_date", type="date", nullable=true)
     */
    private $closingDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attachment1", type="string", length=150, nullable=true)
     */
    private $attachment1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attachment2", type="string", length=150, nullable=true)
     */
    private $attachment2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="publishto", type="integer", nullable=true)
     */
    private $publishto;

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
     * @var \Members
     *
     * @ORM\ManyToOne(targetEntity="Members")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="member_id", referencedColumnName="member_id")
     * })
     */
    private $member;

    /**
     * @var \Countries
     *
     * @ORM\ManyToOne(targetEntity="Countries")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="countryId", referencedColumnName="countryId")
     * })
     */
    private $countryid;


}
