<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompanyProjectMessage
 *
 * @ORM\Table(name="company_project_message", indexes={@ORM\Index(name="fr_member", columns={"member_id"}), @ORM\Index(name="fr_company_projects", columns={"project_id"})})
 * @ORM\Entity
 */
class CompanyProjectMessage
{
    /**
     * @var int
     *
     * @ORM\Column(name="msg_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $msgId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="message", type="text", length=65535, nullable=true)
     */
    private $message;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attachment", type="string", length=150, nullable=true)
     */
    private $attachment;

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
     *   @ORM\JoinColumn(name="member_id", referencedColumnName="member_id")
     * })
     */
    private $member;

    public function getMsgId() 
    {
        return $this->msgId;
    }

    public function getMessage() 
    {
        return $this->message;
    }

    public function getAttachment() 
    {
        return $this->attachment;
    }

    public function getCreated(): \DateTime 
    {
        return $this->created;
    }

    public function getProject(): \CompanyProjects 
    {
        return $this->project;
    }

    public function getMember(): \Members 
    {
        return $this->member;
    }

    public function setMsgId($msgId) 
    {
        $this->msgId = $msgId;
    }

    public function setMessage($message) 
    {
        $this->message = $message;
    }

    public function setAttachment($attachment) 
    {
        $this->attachment = $attachment;
    }

    public function setCreated(\DateTime $created) 
    {
        $this->created = $created;
    }

    public function setProject(\CompanyProjects $project) 
    {
        $this->project = $project;
    }

    public function setMember(\Members $member) 
    {
        $this->member = $member;
    }


}
