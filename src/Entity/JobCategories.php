<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JobCategories
 *
 * @ORM\Table(name="job_categories")
 * @ORM\Entity
 */
class JobCategories
{
    /**
     * @var int
     *
     * @ORM\Column(name="job_cat_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $jobCatId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="job_cat_name", type="string", length=150, nullable=true)
     */
    private $jobCatName;

    public function getJobCatId() 
    {
        return $this->jobCatId;
    }

    public function getJobCatName() 
    {
        return $this->jobCatName;
    }

    public function setJobCatId($jobCatId) 
    {
        $this->jobCatId = $jobCatId;
    }

    public function setJobCatName($jobCatName) 
    {
        $this->jobCatName = $jobCatName;
    }


}
