<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompanyProjects
 *
 * @ORM\Table(name="company_projects", indexes={@ORM\Index(name="fr_countryId", columns={"countryId"}), @ORM\Index(name="fr_company", columns={"companyId"}), @ORM\Index(name="fr_members", columns={"project_owner"})})
 * @ORM\Entity
 */
class CompanyProjects
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
     * @ORM\Column(name="project_name", type="string", length=255, nullable=true)
     */
    private $projectName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="project_type", type="string", length=255, nullable=true)
     */
    private $projectType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="project_location", type="string", length=255, nullable=true)
     */
    private $projectLocation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="project_description", type="text", length=65535, nullable=true)
     */
    private $projectDescription;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var \Company
     *
     * @ORM\ManyToOne(targetEntity="Company")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="companyId", referencedColumnName="company_id")
     * })
     */
    private $companyid;

    /**
     * @var \Countries
     *
     * @ORM\ManyToOne(targetEntity="Countries")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="countryId", referencedColumnName="countryId")
     * })
     */
    private $countryid;

    /**
     * @var \Members
     *
     * @ORM\ManyToOne(targetEntity="Members")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="project_owner", referencedColumnName="member_id")
     * })
     */
    private $projectOwner;


}
