<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupMessage
 *
 * @ORM\Table(name="group_message", indexes={@ORM\Index(name="FK_group_message", columns={"group_id"}), @ORM\Index(name="FK_group_message_1", columns={"member_id"})})
 * @ORM\Entity
 */
class GroupMessage
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var \Groups
     *
     * @ORM\ManyToOne(targetEntity="Groups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="group_id", referencedColumnName="group_id")
     * })
     */
    private $group;

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

    public function getCreated(): \DateTime 
    {
        return $this->created;
    }

    public function getGroup(): \Groups 
    {
        return $this->group;
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

    public function setCreated(\DateTime $created) 
    {
        $this->created = $created;
    }

    public function setGroup(\Groups $group) 
    {
        $this->group = $group;
    }

    public function setMember(\Members $member) 
    {
        $this->member = $member;
    }


}
