<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Members
 *
 * @ORM\Table(name="members", indexes={@ORM\Index(name="FK_members", columns={"user_id"}), @ORM\Index(name="FK_members_company", columns={"company_id"}), @ORM\Index(name="FK_members_functional_area", columns={"company_functional_area_id"}), @ORM\Index(name="FK_members_countries", columns={"countryId"})})
 * @ORM\Entity
 */
class Members
{
    /**
     * @var int
     *
     * @ORM\Column(name="member_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $memberId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_type", type="string", length=255, nullable=true)
     */
    private $companyType;

    /**
     * @var int|null
     * 
     * @ORM\ManyToOne(targetEntity="CompanyFunctionalArea")
     * @ORM\JoinColumn(name="company_functional_area_id", referencedColumnName="id")
     */
    private $companyFunctionalAreaId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="first_name", type="string", length=255, nullable=true)
     */
    private $firstName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_name", type="string", length=255, nullable=true)
     */
    private $lastName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="designation", type="string", length=150, nullable=true)
     */
    private $designation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telephone", type="string", length=15, nullable=true)
     */
    private $telephone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mobile", type="string", length=15, nullable=true)
     */
    private $mobile;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fax", type="string", length=15, nullable=true)
     */
    private $fax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="location", type="string", length=150, nullable=true)
     */
    private $location;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gender", type="string", length=10, nullable=true)
     */
    private $gender;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateOfBirth", type="date", nullable=true)
     */
    private $dateofbirth;

    /**
     * @var string|null
     *
     * @ORM\Column(name="member_photo", type="string", length=200, nullable=true)
     */
    private $memberPhoto;

    /**
     * @var int|null
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cv", type="string", length=200, nullable=true)
     */
    private $cv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="portfolio", type="string", length=200, nullable=true)
     */
    private $portfolio;

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
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     * })
     */
    private $user;

    /**
     * @var \Company
     *
     * @ORM\ManyToOne(targetEntity="Company")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_id", referencedColumnName="company_id")
     * })
     */
    private $company;

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
