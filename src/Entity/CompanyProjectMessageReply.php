<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompanyProjectMessageReply
 *
 * @ORM\Table(name="company_project_message_reply", indexes={@ORM\Index(name="fr_project_message", columns={"msg_id"}), @ORM\Index(name="fr_member_table", columns={"member_id"})})
 * @ORM\Entity
 */
class CompanyProjectMessageReply
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
     * @var \Members
     *
     * @ORM\ManyToOne(targetEntity="Members")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="member_id", referencedColumnName="member_id")
     * })
     */
    private $member;

    /**
     * @var \CompanyProjectMessage
     *
     * @ORM\ManyToOne(targetEntity="CompanyProjectMessage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="msg_id", referencedColumnName="msg_id")
     * })
     */
    private $msg;


}
