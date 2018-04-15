<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EventMessageReply
 *
 * @ORM\Table(name="event_message_reply", indexes={@ORM\Index(name="FK_event_message_reply", columns={"msg_id"}), @ORM\Index(name="FK_event_message_reply_1", columns={"member_id"})})
 * @ORM\Entity
 */
class EventMessageReply
{
    /**
     * @var int
     *
     * @ORM\Column(name="reply_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $replyId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reply_message", type="text", length=65535, nullable=true)
     */
    private $replyMessage;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var \EventMessage
     *
     * @ORM\ManyToOne(targetEntity="EventMessage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="msg_id", referencedColumnName="msg_id")
     * })
     */
    private $msg;

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
