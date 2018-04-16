<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjectInvites
 *
 * @ORM\Table(name="project_invites", indexes={@ORM\Index(name="project_id", columns={"project_id"}), @ORM\Index(name="from_member_id", columns={"from_member_id"}), @ORM\Index(name="to_member_id", columns={"to_member_id"})})
 * @ORM\Entity
 */
class ProjectInvites
{
    /**
     * @var int
     *
     * @ORM\Column(name="project_invite_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $projectInviteId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
     */
    private $status;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var \CompanyProjects
     *
     * @ORM\ManyToOne(targetEntity="CompanyProjects")
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
     *   @ORM\JoinColumn(name="from_member_id", referencedColumnName="member_id")
     * })
     */
    private $fromMember;

    /**
     * @var \Members
     *
     * @ORM\ManyToOne(targetEntity="Members")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_member_id", referencedColumnName="member_id")
     * })
     */
    private $toMember;

    public function getProjectInviteId() 
    {
        return $this->projectInviteId;
    }

    public function getStatus() 
    {
        return $this->status;
    }

    public function getCreated(): \DateTime 
    {
        return $this->created;
    }

    public function getProject(): \CompanyProjects 
    {
        return $this->project;
    }

    public function getFromMember(): \Members 
    {
        return $this->fromMember;
    }

    public function getToMember(): \Members 
    {
        return $this->toMember;
    }

    public function setProjectInviteId($projectInviteId) 
    {
        $this->projectInviteId = $projectInviteId;
    }

    public function setStatus($status) 
    {
        $this->status = $status;
    }

    public function setCreated(\DateTime $created) 
    {
        $this->created = $created;
    }

    public function setProject(\CompanyProjects $project) 
    {
        $this->project = $project;
    }

    public function setFromMember(\Members $fromMember) 
    {
        $this->fromMember = $fromMember;
    }

    public function setToMember(\Members $toMember) 
    {
        $this->toMember = $toMember;
    }


}
