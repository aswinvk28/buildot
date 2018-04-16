<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UpdateReply
 *
 * @ORM\Table(name="update_reply", indexes={@ORM\Index(name="FK_update_reply", columns={"update_id"}), @ORM\Index(name="FK_update_reply_1", columns={"send_by"})})
 * @ORM\Entity
 */
class UpdateReply
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
     * @ORM\Column(name="message", type="string", length=255, nullable=true)
     */
    private $message;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var \Updates
     *
     * @ORM\ManyToOne(targetEntity="Updates")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="update_id", referencedColumnName="id")
     * })
     */
    private $update;

    /**
     * @var \Members
     *
     * @ORM\ManyToOne(targetEntity="Members")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="send_by", referencedColumnName="member_id")
     * })
     */
    private $sendBy;

    public function getReplyId() 
    {
        return $this->replyId;
    }

    public function getMessage() 
    {
        return $this->message;
    }

    public function getCreated(): \DateTime 
    {
        return $this->created;
    }

    public function getUpdate(): \Updates 
    {
        return $this->update;
    }

    public function getSendBy(): \Members 
    {
        return $this->sendBy;
    }

    public function setReplyId($replyId) 
    {
        $this->replyId = $replyId;
    }

    public function setMessage($message) 
    {
        $this->message = $message;
    }

    public function setCreated(\DateTime $created) 
    {
        $this->created = $created;
    }

    public function setUpdate(\Updates $update) 
    {
        $this->update = $update;
    }

    public function setSendBy(\Members $sendBy) 
    {
        $this->sendBy = $sendBy;
    }


}
