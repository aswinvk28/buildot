<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use App\Model\AbstractDocument;

/**
 * Members
 *
 * @ORM\Table(name="members", indexes={@ORM\Index(name="FK_members", columns={"user_id"}), @ORM\Index(name="FK_members_company", columns={"company_id"}), @ORM\Index(name="FK_members_functional_area", columns={"company_functional_area_id"}), @ORM\Index(name="FK_members_countries", columns={"countryId"})})
 * @ORM\Entity
 */
class Members extends AbstractDocument
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

    public function getMemberId() 
    {
        return $this->memberId;
    }

    public function getCompanyType() 
    {
        return $this->companyType;
    }

    public function getCompanyFunctionalAreaId() 
    {
        return $this->companyFunctionalAreaId;
    }

    public function getFirstName() 
    {
        return $this->firstName;
    }

    public function getLastName() 
    {
        return $this->lastName;
    }

    public function getDesignation() 
    {
        return $this->designation;
    }

    public function getTelephone() 
    {
        return $this->telephone;
    }

    public function getMobile() 
    {
        return $this->mobile;
    }

    public function getFax() 
    {
        return $this->fax;
    }

    public function getLocation() 
    {
        return $this->location;
    }

    public function getGender() 
    {
        return $this->gender;
    }

    public function getDateofbirth(): \DateTime 
    {
        return $this->dateofbirth;
    }

    public function getMemberPhoto() 
    {
        return $this->memberPhoto;
    }

    public function getStatus() 
    {
        return $this->status;
    }

    public function getCv() 
    {
        return $this->cv;
    }

    public function getPortfolio() 
    {
        return $this->portfolio;
    }

    public function getCreated(): \DateTime 
    {
        return $this->created;
    }

    public function getModified(): \DateTime 
    {
        return $this->modified;
    }

    public function getUser(): \Users 
    {
        return $this->user;
    }

    public function getCompany(): \Company 
    {
        return $this->company;
    }

    public function getCountryid(): \Countries 
    {
        return $this->countryid;
    }

    public function setMemberId($memberId) 
    {
        $this->memberId = $memberId;
    }

    public function setCompanyType($companyType) 
    {
        $this->companyType = $companyType;
    }

    public function setCompanyFunctionalAreaId($companyFunctionalAreaId) 
    {
        $this->companyFunctionalAreaId = $companyFunctionalAreaId;
    }

    public function setFirstName($firstName) 
    {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName) 
    {
        $this->lastName = $lastName;
    }

    public function setDesignation($designation) 
    {
        $this->designation = $designation;
    }

    public function setTelephone($telephone) 
    {
        $this->telephone = $telephone;
    }

    public function setMobile($mobile) 
    {
        $this->mobile = $mobile;
    }

    public function setFax($fax) 
    {
        $this->fax = $fax;
    }

    public function setLocation($location) 
    {
        $this->location = $location;
    }

    public function setGender($gender) 
    {
        $this->gender = $gender;
    }

    public function setDateofbirth(\DateTime $dateofbirth) 
    {
        $this->dateofbirth = $dateofbirth;
    }

    public function setMemberPhoto($memberPhoto) 
    {
        $this->memberPhoto = $memberPhoto;
    }

    public function setStatus($status) 
    {
        $this->status = $status;
    }

    public function setCv($cv) 
    {
        $this->cv = $cv;
    }

    public function setPortfolio($portfolio) 
    {
        $this->portfolio = $portfolio;
    }

    public function setCreated(\DateTime $created) 
    {
        $this->created = $created;
    }

    public function setModified(\DateTime $modified) 
    {
        $this->modified = $modified;
    }

    public function setUser(\Users $user) 
    {
        $this->user = $user;
    }

    public function setCompany(\Company $company) 
    {
        $this->company = $company;
    }

    public function setCountryid(\Countries $countryid) 
    {
        $this->countryid = $countryid;
    }

    public function setPersonalPhoto(File $file, string $directory)
    {
        $directory = $this->createDirectoryIfNotExists($directory . DIRECTORY_SEPARATOR . $this->hashDirectory());
        $file->move($directory, 
                $this->hashFileName($file->getFilename()));
        $this->setMemberPhoto($file->getPath());
        return $file;
    }
    
    public function setCurriculumVitae(File $file, string $directory)
    {
        $directory = $this->createDirectoryIfNotExists($directory . DIRECTORY_SEPARATOR . $this->hashDirectory());
        $file->move($directory, 
                $this->hashFileName($file->getFilename()));
        $this->setCv($file->getPath());
        return $file;
    }
    
    public function setWorkPortfolio(File $file, string $directory)
    {
        $directory = $this->createDirectoryIfNotExists($directory . DIRECTORY_SEPARATOR . $this->hashDirectory());
        $file->move($directory, 
                $this->hashFileName($file->getFilename()));
        $this->setPortfolio($file->getPath());
        return $file;
    }
}
