<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Events
 *
 * @ORM\Table(name="events", indexes={@ORM\Index(name="FK_events", columns={"created_by"}), @ORM\Index(name="FK_events_countries", columns={"countryId"})})
 * @ORM\Entity
 */
class Events
{
    /**
     * @var int
     *
     * @ORM\Column(name="event_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $eventId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="event_title", type="string", length=150, nullable=true)
     */
    private $eventTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="location", type="string", length=255, nullable=true)
     */
    private $location;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="event_date", type="datetime", nullable=true)
     */
    private $eventDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="website", type="string", length=150, nullable=true)
     */
    private $website;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=150, nullable=true)
     */
    private $image;

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
     *   @ORM\JoinColumn(name="created_by", referencedColumnName="member_id")
     * })
     */
    private $createdBy;

    /**
     * @var \Countries
     *
     * @ORM\ManyToOne(targetEntity="Countries")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="countryId", referencedColumnName="countryId")
     * })
     */
    private $countryid;

    public function getEventId() 
    {
        return $this->eventId;
    }

    public function getEventTitle() 
    {
        return $this->eventTitle;
    }

    public function getDescription() 
    {
        return $this->description;
    }

    public function getLocation() 
    {
        return $this->location;
    }

    public function getEventDate(): \DateTime 
    {
        return $this->eventDate;
    }

    public function getWebsite() 
    {
        return $this->website;
    }

    public function getImage() 
    {
        return $this->image;
    }

    public function getCreated(): \DateTime 
    {
        return $this->created;
    }

    public function getCreatedBy(): \Members 
    {
        return $this->createdBy;
    }

    public function getCountryid(): \Countries 
    {
        return $this->countryid;
    }

    public function setEventId($eventId) 
    {
        $this->eventId = $eventId;
    }

    public function setEventTitle($eventTitle) 
    {
        $this->eventTitle = $eventTitle;
    }

    public function setDescription($description) 
    {
        $this->description = $description;
    }

    public function setLocation($location) 
    {
        $this->location = $location;
    }

    public function setEventDate(\DateTime $eventDate) 
    {
        $this->eventDate = $eventDate;
    }

    public function setWebsite($website) 
    {
        $this->website = $website;
    }

    public function setImage($image) 
    {
        $this->image = $image;
    }

    public function setCreated(\DateTime $created) 
    {
        $this->created = $created;
    }

    public function setCreatedBy(\Members $createdBy) 
    {
        $this->createdBy = $createdBy;
    }

    public function setCountryid(\Countries $countryid) 
    {
        $this->countryid = $countryid;
    }


}
