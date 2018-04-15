<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReadTenders
 *
 * @ORM\Table(name="read_tenders", indexes={@ORM\Index(name="read_tenders_ibfk_1", columns={"member_id"}), @ORM\Index(name="read_tenders_ibfk_2", columns={"tender_id"})})
 * @ORM\Entity
 */
class ReadTenders
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
     * @var \Members
     *
     * @ORM\ManyToOne(targetEntity="Members")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="member_id", referencedColumnName="member_id")
     * })
     */
    private $member;

    /**
     * @var \Tenders
     *
     * @ORM\ManyToOne(targetEntity="Tenders")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tender_id", referencedColumnName="tender_id")
     * })
     */
    private $tender;


}
