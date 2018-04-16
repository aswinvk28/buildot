<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Posts
 *
 * @ORM\Table(name="posts", indexes={@ORM\Index(name="FK_posts", columns={"send_by"})})
 * @ORM\Entity
 */
class Posts
{
    /**
     * @var int
     *
     * @ORM\Column(name="post_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $postId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="message", type="string", length=500, nullable=true)
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
     * @var \Members
     *
     * @ORM\ManyToOne(targetEntity="Members")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="send_by", referencedColumnName="member_id")
     * })
     */
    private $sendBy;

    public function getPostId() 
    {
        return $this->postId;
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

    public function getSendBy(): \Members 
    {
        return $this->sendBy;
    }

    public function setPostId($postId) 
    {
        $this->postId = $postId;
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

    public function setSendBy(\Members $sendBy) 
    {
        $this->sendBy = $sendBy;
    }


}
