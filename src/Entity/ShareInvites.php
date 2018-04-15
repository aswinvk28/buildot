<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShareInvites
 *
 * @ORM\Table(name="share_invites", indexes={@ORM\Index(name="FK_share_invites", columns={"from_member_id"}), @ORM\Index(name="FK_share_invites_1", columns={"to_member_id"})})
 * @ORM\Entity
 */
class ShareInvites
{
    /**
     * @var int
     *
     * @ORM\Column(name="share_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $shareId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="page", type="string", length=100, nullable=true)
     */
    private $page;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id", type="integer", nullable=true)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
     */
    private $status;

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
     *   @ORM\JoinColumn(name="from_member_id", referencedColumnName="member_id")
     * })
     */
    private $fromMember;

    /**
     * @var \Members
     *
     * @ORM\ManyToOne(targetEntity="Members")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_member_id", referencedColumnName="member_id")
     * })
     */
    private $toMember;


}
