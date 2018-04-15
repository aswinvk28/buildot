<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BannerCategory
 *
 * @ORM\Table(name="banner_category")
 * @ORM\Entity
 */
class BannerCategory
{
    /**
     * @var int
     *
     * @ORM\Column(name="banner_cat_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $bannerCatId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="banner_category", type="string", length=255, nullable=true)
     */
    private $bannerCategory;

    /**
     * @var int|null
     *
     * @ORM\Column(name="width", type="integer", nullable=true)
     */
    private $width;

    /**
     * @var int|null
     *
     * @ORM\Column(name="height", type="integer", nullable=true)
     */
    private $height;


}
