<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tenders
 *
 * @ORM\Table(name="tenders", indexes={@ORM\Index(name="FK_tenders", columns={"project_id"}), @ORM\Index(name="FK_tenders_members", columns={"member_id"})})
 * @ORM\Entity
 */
class Tenders
{
    /**
     * @var int
     *
     * @ORM\Column(name="tender_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tenderId;

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
     * @var int|null
     *
     * @ORM\Column(name="proposed_budget", type="integer", nullable=true)
     */
    private $proposedBudget;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sector", type="string", length=255, nullable=true)
     */
    private $sector;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attachment", type="string", length=150, nullable=true)
     */
    private $attachment;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count", type="integer", nullable=true)
     */
    private $count = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var \Projects
     *
     * @ORM\ManyToOne(targetEntity="Projects")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="project_id", referencedColumnName="project_id")
     * })
     */
    private $project;

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
