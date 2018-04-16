<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JobOpenings
 *
 * @ORM\Table(name="job_openings", indexes={@ORM\Index(name="FK_job_openings", columns={"job_cat_id"}), @ORM\Index(name="FK_job_openings_1", columns={"created_by"})})
 * @ORM\Entity
 */
class JobOpenings
{
    /**
     * @var int
     *
     * @ORM\Column(name="job_opening_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $jobOpeningId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="location", type="string", length=255, nullable=true)
     */
    private $location;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_number", type="string", length=15, nullable=true)
     */
    private $contactNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="expiry_date", type="date", nullable=true)
     */
    private $expiryDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="status", type="integer", nullable=true, options={"default"="1"})
     */
    private $status = '1';

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
     * @var \JobCategories
     *
     * @ORM\ManyToOne(targetEntity="JobCategories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="job_cat_id", referencedColumnName="job_cat_id")
     * })
     */
    private $jobCat;

    /**
     * @var \Members
     *
     * @ORM\ManyToOne(targetEntity="Members")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="created_by", referencedColumnName="member_id")
     * })
     */
    private $createdBy;

    public function getJobOpeningId() 
    {
        return $this->jobOpeningId;
    }

    public function getTitle() 
    {
        return $this->title;
    }

    public function getDescription() 
    {
        return $this->description;
    }

    public function getLocation() 
    {
        return $this->location;
    }

    public function getContactNumber() 
    {
        return $this->contactNumber;
    }

    public function getEmail() 
    {
        return $this->email;
    }

    public function getExpiryDate(): \DateTime 
    {
        return $this->expiryDate;
    }

    public function getStatus() 
    {
        return $this->status;
    }

    public function getCreated(): \DateTime 
    {
        return $this->created;
    }

    public function getModified(): \DateTime 
    {
        return $this->modified;
    }

    public function getJobCat(): \JobCategories 
    {
        return $this->jobCat;
    }

    public function getCreatedBy(): \Members 
    {
        return $this->createdBy;
    }

    public function setJobOpeningId($jobOpeningId) 
    {
        $this->jobOpeningId = $jobOpeningId;
    }

    public function setTitle($title) 
    {
        $this->title = $title;
    }

    public function setDescription($description) 
    {
        $this->description = $description;
    }

    public function setLocation($location) 
    {
        $this->location = $location;
    }

    public function setContactNumber($contactNumber) 
    {
        $this->contactNumber = $contactNumber;
    }

    public function setEmail($email) 
    {
        $this->email = $email;
    }

    public function setExpiryDate(\DateTime $expiryDate) 
    {
        $this->expiryDate = $expiryDate;
    }

    public function setStatus($status) 
    {
        $this->status = $status;
    }

    public function setCreated(\DateTime $created) 
    {
        $this->created = $created;
    }

    public function setModified(\DateTime $modified) 
    {
        $this->modified = $modified;
    }

    public function setJobCat(\JobCategories $jobCat) 
    {
        $this->jobCat = $jobCat;
    }

    public function setCreatedBy(\Members $createdBy) 
    {
        $this->createdBy = $createdBy;
    }


}
