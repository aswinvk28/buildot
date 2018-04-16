<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Banners
 *
 * @ORM\Table(name="banners", indexes={@ORM\Index(name="FK_banners", columns={"banner_cat_id"})})
 * @ORM\Entity
 */
class Banners
{
    /**
     * @var int
     *
     * @ORM\Column(name="banner_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $bannerId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="banner_title", type="string", length=255, nullable=true)
     */
    private $bannerTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="file", type="string", length=255, nullable=true)
     */
    private $file;

    /**
     * @var string|null
     *
     * @ORM\Column(name="link", type="string", length=500, nullable=true)
     */
    private $link;

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
     * @var \BannerCategory
     *
     * @ORM\ManyToOne(targetEntity="BannerCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="banner_cat_id", referencedColumnName="banner_cat_id")
     * })
     */
    private $bannerCat;

    public function getBannerId() 
    {
        return $this->bannerId;
    }

    public function getBannerTitle() 
    {
        return $this->bannerTitle;
    }

    public function getFile() 
    {
        return $this->file;
    }

    public function getLink() 
    {
        return $this->link;
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

    public function getBannerCat(): \BannerCategory 
    {
        return $this->bannerCat;
    }

    public function setBannerId($bannerId) 
    {
        $this->bannerId = $bannerId;
    }

    public function setBannerTitle($bannerTitle) 
    {
        $this->bannerTitle = $bannerTitle;
    }

    public function setFile($file) 
    {
        $this->file = $file;
    }

    public function setLink($link) 
    {
        $this->link = $link;
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

    public function setBannerCat(\BannerCategory $bannerCat) 
    {
        $this->bannerCat = $bannerCat;
    }


}
