<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupMessageReply
 *
 * @ORM\Table(name="group_message_reply", indexes={@ORM\Index(name="FK_group_message_reply", columns={"member_id"}), @ORM\Index(name="FK_group_message_reply_1", columns={"msg_id"})})
 * @ORM\Entity
 */
class GroupMessageReply
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
     * @var \Members
     *
     * @ORM\ManyToOne(targetEntity="Members")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="member_id", referencedColumnName="member_id")
     * })
     */
    private $member;

    /**
     * @var \GroupMessage
     *
     * @ORM\ManyToOne(targetEntity="GroupMessage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="msg_id", referencedColumnName="msg_id")
     * })
     */
    private $msg;


}
