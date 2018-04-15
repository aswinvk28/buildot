<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FriendRequests
 *
 * @ORM\Table(name="friend_requests", indexes={@ORM\Index(name="FK_friend_requests", columns={"from_member_id"}), @ORM\Index(name="FK_friend_requests_1", columns={"to_member_id"})})
 * @ORM\Entity
 */
class FriendRequests
{
    /**
     * @var int
     *
     * @ORM\Column(name="friend_request_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $friendRequestId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=50, nullable=true)
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
