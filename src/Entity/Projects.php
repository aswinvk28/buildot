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

    public function getProjectId() 
    {
        return $this->projectId;
    }

    public function getProjectRefNo() 
    {
        return $this->projectRefNo;
    }

    public function getProjectName() 
    {
        return $this->projectName;
    }

    public function getProjectLocation() 
    {
        return $this->projectLocation;
    }

    public function getLocationMap() 
    {
        return $this->locationMap;
    }

    public function getMaxAllocBudget() 
    {
        return $this->maxAllocBudget;
    }

    public function getOpeningDate(): \DateTime
    {
        return $this->openingDate;
    }

    public function getClosingDate(): \DateTime
    {
        return $this->closingDate;
    }

    public function getDescription() 
    {
        return $this->description;
    }

    public function getAttachment1() 
    {
        return $this->attachment1;
    }

    public function getAttachment2() 
    {
        return $this->attachment2;
    }

    public function getPublishto() 
    {
        return $this->publishto;
    }

    public function getCreated(): \DateTime
    {
        return $this->created;
    }

    public function getModified(): \DateTime
    {
        return $this->modified;
    }

    public function getMember(): Members 
    {
        return $this->member;
    }

    public function getCountryid(): Countries 
    {
        return $this->countryid;
    }

    public function setProjectId($projectId) 
    {
        $this->projectId = $projectId;
    }

    public function setProjectRefNo($projectRefNo) 
    {
        $this->projectRefNo = $projectRefNo;
    }

    public function setProjectName($projectName) 
    {
        $this->projectName = $projectName;
    }

    public function setProjectLocation($projectLocation) 
    {
        $this->projectLocation = $projectLocation;
    }

    public function setLocationMap($locationMap) 
    {
        $this->locationMap = $locationMap;
    }

    public function setMaxAllocBudget($maxAllocBudget) 
    {
        $this->maxAllocBudget = $maxAllocBudget;
    }

    public function setOpeningDate(\DateTime $openingDate) 
    {
        $this->openingDate = $openingDate;
    }

    public function setClosingDate(\DateTime $closingDate) 
    {
        $this->closingDate = $closingDate;
    }

    public function setDescription($description) 
    {
        $this->description = $description;
    }

    public function setAttachment1($attachment1) 
    {
        $this->attachment1 = $attachment1;
    }

    public function setAttachment2($attachment2) 
    {
        $this->attachment2 = $attachment2;
    }

    public function setPublishto($publishto) 
    {
        $this->publishto = $publishto;
    }

    public function setCreated(\DateTime $created) 
    {
        $this->created = $created;
    }

    public function setModified(\DateTime $modified) 
    {
        $this->modified = $modified;
    }

    public function setMember(Members $member) 
    {
        $this->member = $member;
    }

    public function setCountryid(Countries $countryid) 
    {
        $this->countryid = $countryid;
    }


}
