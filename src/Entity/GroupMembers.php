<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupMembers
 *
 * @ORM\Table(name="group_members", indexes={@ORM\Index(name="FK_group_members", columns={"group_id"}), @ORM\Index(name="FK_group_members_1", columns={"member_id"})})
 * @ORM\Entity
 */
class GroupMembers
{
    /**
     * @var int
     *
     * @ORM\Column(name="member_group_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $memberGroupId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $created = 'CURRENT_TIMESTAMP';

    /**
     * @var \Groups
     *
     * @ORM\ManyToOne(targetEntity="Groups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="group_id", referencedColumnName="group_id")
     * })
     */
    private $group;

    /**
     * @var \Members
     *
     * @ORM\ManyToOne(targetEntity="Members")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="member_id", referencedColumnName="member_id")
     * })
     */
    private $member;

    public function getMemberGroupId() 
    {
        return $this->memberGroupId;
    }

    public function getCreated(): \DateTime 
    {
        return $this->created;
    }

    public function getGroup(): \Groups 
    {
        return $this->group;
    }

    public function getMember(): \Members 
    {
        return $this->member;
    }

    public function setMemberGroupId($memberGroupId) 
    {
        $this->memberGroupId = $memberGroupId;
    }

    public function setCreated(\DateTime $created) 
    {
        $this->created = $created;
    }

    public function setGroup(\Groups $group) 
    {
        $this->group = $group;
    }

    public function setMember(\Members $member) 
    {
        $this->member = $member;
    }


}
