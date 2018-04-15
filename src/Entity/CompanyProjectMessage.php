<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompanyProjectMessage
 *
 * @ORM\Table(name="company_project_message", indexes={@ORM\Index(name="fr_member", columns={"member_id"}), @ORM\Index(name="fr_company_projects", columns={"project_id"})})
 * @ORM\Entity
 */
class CompanyProjectMessage
{
    /**
     * @var int
     *
     * @ORM\Column(name="msg_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $msgId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="message", type="text", length=65535, nullable=true)
     */
    private $message;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attachment", type="string", length=150, nullable=true)
     */
    private $attachment;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var \CompanyProjects
     *
     * @ORM\ManyToOne(targetEntity="CompanyProjects")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="project_id", referencedColumnName="project_id")
     * })
     */
    private $project;

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
