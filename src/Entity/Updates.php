<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Updates
 *
 * @ORM\Table(name="updates", indexes={@ORM\Index(name="FK_updates", columns={"member_id"})})
 * @ORM\Entity
 */
class Updates
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="update_message", type="string", length=255, nullable=true)
     */
    private $updateMessage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="table_name", type="string", length=50, nullable=true)
     */
    private $tableName;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ids", type="integer", nullable=true)
     */
    private $ids;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $created = 'CURRENT_TIMESTAMP';

    /**
     * @var \Members
     *
     * @ORM\ManyToOne(targetEntity="Members")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="member_id", referencedColumnName="member_id")
     * })
     */
    private $member;

    public function getId() 
    {
        return $this->id;
    }

    public function getUpdateMessage() 
    {
        return $this->updateMessage;
    }

    public function getTableName() 
    {
        return $this->tableName;
    }

    public function getIds() 
    {
        return $this->ids;
    }

    public function getCreated(): \DateTime 
    {
        return $this->created;
    }

    public function getMember(): \Members 
    {
        return $this->member;
    }

    public function setId($id) 
    {
        $this->id = $id;
    }

    public function setUpdateMessage($updateMessage) 
    {
        $this->updateMessage = $updateMessage;
    }

    public function setTableName($tableName) 
    {
        $this->tableName = $tableName;
    }

    public function setIds($ids) 
    {
        $this->ids = $ids;
    }

    public function setCreated(\DateTime $created) 
    {
        $this->created = $created;
    }

    public function setMember(\Members $member) 
    {
        $this->member = $member;
    }


}
