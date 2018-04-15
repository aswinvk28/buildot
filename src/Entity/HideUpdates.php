<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HideUpdates
 *
 * @ORM\Table(name="hide_updates", indexes={@ORM\Index(name="member_id", columns={"member_id"}), @ORM\Index(name="update_id", columns={"update_id"})})
 * @ORM\Entity
 */
class HideUpdates
{
    /**
     * @var int
     *
     * @ORM\Column(name="hide_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $hideId;

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
     * @var \Updates
     *
     * @ORM\ManyToOne(targetEntity="Updates")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="update_id", referencedColumnName="id")
     * })
     */
    private $update;


}
