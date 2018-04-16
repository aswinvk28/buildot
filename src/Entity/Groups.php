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

    public function getGroupId() 
    {
        return $this->groupId;
    }

    public function getGroupName() 
    {
        return $this->groupName;
    }

    public function getGroupType() 
    {
        return $this->groupType;
    }

    public function getWebsite() 
    {
        return $this->website;
    }

    public function getPrivacy() 
    {
        return $this->privacy;
    }

    public function getSummary() 
    {
        return $this->summary;
    }

    public function getDescription() 
    {
        return $this->description;
    }

    public function getGroupImage() 
    {
        return $this->groupImage;
    }

    public function getCreated(): \DateTime 
    {
        return $this->created;
    }

    public function getGroupOwner(): \Members 
    {
        return $this->groupOwner;
    }

    public function setGroupId($groupId) 
    {
        $this->groupId = $groupId;
    }

    public function setGroupName($groupName) 
    {
        $this->groupName = $groupName;
    }

    public function setGroupType($groupType) 
    {
        $this->groupType = $groupType;
    }

    public function setWebsite($website) 
    {
        $this->website = $website;
    }

    public function setPrivacy($privacy) 
    {
        $this->privacy = $privacy;
    }

    public function setSummary($summary) 
    {
        $this->summary = $summary;
    }

    public function setDescription($description) 
    {
        $this->description = $description;
    }

    public function setGroupImage($groupImage) 
    {
        $this->groupImage = $groupImage;
    }

    public function setCreated(\DateTime $created) 
    {
        $this->created = $created;
    }

    public function setGroupOwner(\Members $groupOwner) 
    {
        $this->groupOwner = $groupOwner;
    }


}
