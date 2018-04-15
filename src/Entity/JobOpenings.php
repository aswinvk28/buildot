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


}
