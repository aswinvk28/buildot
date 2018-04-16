<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EventMessage
 *
 * @ORM\Table(name="event_message", indexes={@ORM\Index(name="FK_event_message", columns={"event_id"}), @ORM\Index(name="FK_event_message_1", columns={"member_id"})})
 * @ORM\Entity
 */
class EventMessage
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
     * @var \Events
     *
     * @ORM\ManyToOne(targetEntity="Events")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="event_id", referencedColumnName="event_id")
     * })
     */
    private $event;

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

    public function getEvent(): \Events 
    {
        return $this->event;
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

    public function setEvent(\Events $event) 
    {
        $this->event = $event;
    }

    public function setMember(\Members $member) 
    {
        $this->member = $member;
    }


}
