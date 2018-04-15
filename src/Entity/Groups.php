<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groups
 *
 * @ORM\Table(name="groups", indexes={@ORM\Index(name="FK_groups", columns={"group_owner"})})
 * @ORM\Entity
 */
class Groups
{
    /**
     * @var int
     *
     * @ORM\Column(name="group_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $groupId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="group_name", type="string", length=255, nullable=true)
     */
    private $groupName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="group_type", type="string", length=100, nullable=true)
     */
    private $groupType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="website", type="string", length=150, nullable=true)
     */
    private $website;

    /**
     * @var string|null
     *
     * @ORM\Column(name="privacy", type="string", length=25, nullable=true)
     */
    private $privacy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="summary", type="text", length=65535, nullable=true)
     */
    private $summary;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="group_image", type="string", length=150, nullable=true)
     */
    private $groupImage;

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
     *   @ORM\JoinColumn(name="group_owner", referencedColumnName="member_id")
     * })
     */
    private $groupOwner;


}
