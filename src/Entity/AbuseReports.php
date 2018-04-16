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

    public function getReportId() 
    {
        return $this->reportId;
    }

    public function getTableName() 
    {
        return $this->tableName;
    }

    public function getId() 
    {
        return $this->id;
    }

    public function getCreated(): \DateTime 
    {
        return $this->created;
    }

    public function setReportId($reportId) 
    {
        $this->reportId = $reportId;
    }

    public function setTableName($tableName) 
    {
        $this->tableName = $tableName;
    }

    public function setId($id) 
    {
        $this->id = $id;
    }

    public function setCreated(\DateTime $created) 
    {
        $this->created = $created;
    }


}
