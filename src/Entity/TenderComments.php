<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TenderComments
 *
 * @ORM\Table(name="tender_comments", indexes={@ORM\Index(name="FK_tender_comments", columns={"tender_id"}), @ORM\Index(name="FK_tender_comments_1", columns={"member_id"})})
 * @ORM\Entity
 */
class TenderComments
{
    /**
     * @var int
     *
     * @ORM\Column(name="tender_comment_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tenderCommentId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var \Tenders
     *
     * @ORM\ManyToOne(targetEntity="Tenders")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tender_id", referencedColumnName="tender_id")
     * })
     */
    private $tender;

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
