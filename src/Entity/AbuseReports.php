<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbuseReports
 *
 * @ORM\Table(name="abuse_reports")
 * @ORM\Entity
 */
class AbuseReports
{
    /**
     * @var int
     *
     * @ORM\Column(name="report_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $reportId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="table_name", type="string", length=50, nullable=true)
     */
    private $tableName;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id", type="integer", nullable=true)
     */
    private $id;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;


}
