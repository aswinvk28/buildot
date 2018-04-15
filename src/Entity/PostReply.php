<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PostReply
 *
 * @ORM\Table(name="post_reply", indexes={@ORM\Index(name="FK_post_reply", columns={"post_id"}), @ORM\Index(name="FK_post_reply_1", columns={"send_by"})})
 * @ORM\Entity
 */
class PostReply
{
    /**
     * @var int
     *
     * @ORM\Column(name="post_reply_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $postReplyId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="message", type="string", length=500, nullable=true)
     */
    private $message;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var \Posts
     *
     * @ORM\ManyToOne(targetEntity="Posts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="post_id", referencedColumnName="post_id")
     * })
     */
    private $post;

    /**
     * @var \Members
     *
     * @ORM\ManyToOne(targetEntity="Members")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="send_by", referencedColumnName="member_id")
     * })
     */
    private $sendBy;


}
