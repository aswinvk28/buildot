<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MemberPortfolio
 *
 * @ORM\Table(name="member_portfolio", indexes={@ORM\Index(name="FK_member_p", columns={"member_id"})})
 * @ORM\Entity
 */
class MemberPortfolio
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="portfolio", type="string", length=200, nullable=false)
     */
    private $portfolio;

    /**
     * @var \Members
     *
     * @ORM\ManyToOne(targetEntity="Members")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="member_id", referencedColumnName="member_id")
     * })
     */
    private $member;


}
