<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShareInvites
 *
 * @ORM\Table(name="share_invites", indexes={@ORM\Index(name="FK_share_invites", columns={"from_member_id"}), @ORM\Index(name="FK_share_invites_1", columns={"to_member_id"})})
 * @ORM\Entity
 */
class ShareInvites
{
    /**
     * @var int
     *
     * @ORM\Column(name="share_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $shareId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="page", type="string", length=100, nullable=true)
     */
    private $page;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id", type="integer", nullable=true)
     */
    private $id;

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

    public function getShareId() 
    {
        return $this->shareId;
    }

    public function getPage() 
    {
        return $this->page;
    }

    public function getId() 
    {
        return $this->id;
    }

    public function getStatus() 
    {
        return $this->status;
    }

    public function getCreated(): \DateTime 
    {
        return $this->created;
    }

    public function getFromMember(): \Members 
    {
        return $this->fromMember;
    }

    public function getToMember(): \Members 
    {
        return $this->toMember;
    }

    public function setShareId($shareId) 
    {
        $this->shareId = $shareId;
    }

    public function setPage($page) 
    {
        $this->page = $page;
    }

    public function setId($id) 
    {
        $this->id = $id;
    }

    public function setStatus($status) 
    {
        $this->status = $status;
    }

    public function setCreated(\DateTime $created) 
    {
        $this->created = $created;
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
