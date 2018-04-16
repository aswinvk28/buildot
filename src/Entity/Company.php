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

    public function getCompanyId() 
    {
        return $this->companyId;
    }

    public function getCompanyName() 
    {
        return $this->companyName;
    }

    public function getWebsite() 
    {
        return $this->website;
    }

    public function getLogo() 
    {
        return $this->logo;
    }

    public function getPortfolio() 
    {
        return $this->portfolio;
    }

    public function getCompanyStatus() 
    {
        return $this->companyStatus;
    }

    public function getCreated(): \DateTime 
    {
        return $this->created;
    }

    public function getModified(): \DateTime 
    {
        return $this->modified;
    }

    public function setCompanyId($companyId) 
    {
        $this->companyId = $companyId;
    }

    public function setCompanyName($companyName) 
    {
        $this->companyName = $companyName;
    }

    public function setWebsite($website) 
    {
        $this->website = $website;
    }

    public function setLogo($logo) 
    {
        $this->logo = $logo;
    }

    public function setPortfolio($portfolio) 
    {
        $this->portfolio = $portfolio;
    }

    public function setCompanyStatus($companyStatus) 
    {
        $this->companyStatus = $companyStatus;
    }

    public function setCreated(\DateTime $created) 
    {
        $this->created = $created;
    }

    public function setModified(\DateTime $modified) 
    {
        $this->modified = $modified;
    }


}
