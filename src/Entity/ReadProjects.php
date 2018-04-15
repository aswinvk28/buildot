<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReadProjects
 *
 * @ORM\Table(name="read_projects", indexes={@ORM\Index(name="read_projects_ibfk_1", columns={"member_id"}), @ORM\Index(name="read_projects_ibfk_2", columns={"project_id"})})
 * @ORM\Entity
 */
class ReadProjects
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
     * @var \Members
     *
     * @ORM\ManyToOne(targetEntity="Members")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="member_id", referencedColumnName="member_id")
     * })
     */
    private $member;

    /**
     * @var \Projects
     *
     * @ORM\ManyToOne(targetEntity="Projects")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="project_id", referencedColumnName="project_id")
     * })
     */
    private $project;


}
