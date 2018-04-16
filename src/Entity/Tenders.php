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

    public function getTenderId() 
    {
        return $this->tenderId;
    }

    public function getTitle() 
    {
        return $this->title;
    }

    public function getDescription() 
    {
        return $this->description;
    }

    public function getProposedBudget() 
    {
        return $this->proposedBudget;
    }

    public function getSector() 
    {
        return $this->sector;
    }

    public function getAttachment() 
    {
        return $this->attachment;
    }

    public function getCount() 
    {
        return $this->count;
    }

    public function getCreated(): \DateTime 
    {
        return $this->created;
    }

    public function getProject(): \Projects 
    {
        return $this->project;
    }

    public function getMember(): \Members 
    {
        return $this->member;
    }

    public function setTenderId($tenderId) 
    {
        $this->tenderId = $tenderId;
    }

    public function setTitle($title) 
    {
        $this->title = $title;
    }

    public function setDescription($description) 
    {
        $this->description = $description;
    }

    public function setProposedBudget($proposedBudget) 
    {
        $this->proposedBudget = $proposedBudget;
    }

    public function setSector($sector) 
    {
        $this->sector = $sector;
    }

    public function setAttachment($attachment) 
    {
        $this->attachment = $attachment;
    }

    public function setCount($count) 
    {
        $this->count = $count;
    }

    public function setCreated(\DateTime $created) 
    {
        $this->created = $created;
    }

    public function setProject(\Projects $project) 
    {
        $this->project = $project;
    }

    public function setMember(\Members $member) 
    {
        $this->member = $member;
    }


}
