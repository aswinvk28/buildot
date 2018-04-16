<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MemberCurriculumVitae
 *
 * @ORM\Table(name="member_curriculum_vitae", indexes={@ORM\Index(name="FK_member", columns={"member_id"})})
 * @ORM\Entity
 */
class MemberCurriculumVitae
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
     * @var int
     *
     * @ORM\Column(name="version", type="integer", nullable=false)
     */
    private $version;

    /**
     * @var string
     *
     * @ORM\Column(name="cv", type="string", length=200, nullable=false)
     */
    private $cv;

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

    public function getVersion() 
    {
        return $this->version;
    }

    public function getCv() 
    {
        return $this->cv;
    }

    public function getMember(): \Members 
    {
        return $this->member;
    }

    public function setId($id) 
    {
        $this->id = $id;
    }

    public function setVersion($version) 
    {
        $this->version = $version;
    }

    public function setCv($cv) 
    {
        $this->cv = $cv;
    }

    public function setMember(\Members $member) 
    {
        $this->member = $member;
    }


}
