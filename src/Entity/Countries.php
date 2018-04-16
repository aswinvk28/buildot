<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Countries
 *
 * @ORM\Table(name="countries")
 * @ORM\Entity
 */
class Countries
{
    /**
     * @var int
     *
     * @ORM\Column(name="countryId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $countryid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=true)
     */
    private $country;

    /**
     * @var string|null
     *
     * @ORM\Column(name="currency", type="string", length=255, nullable=true)
     */
    private $currency;

    /**
     * @var string|null
     *
     * @ORM\Column(name="currency_name", type="string", length=255, nullable=true)
     */
    private $currencyName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="country_code", type="string", length=255, nullable=true)
     */
    private $countryCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="country_letter", type="string", length=255, nullable=true)
     */
    private $countryLetter;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="currency_display", type="boolean", nullable=true)
     */
    private $currencyDisplay = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="selected", type="boolean", nullable=true)
     */
    private $selected = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="display", type="boolean", nullable=true)
     */
    private $display = '0';

    public function getCountryid() 
    {
        return $this->countryid;
    }

    public function getCountry() 
    {
        return $this->country;
    }

    public function getCurrency() 
    {
        return $this->currency;
    }

    public function getCurrencyName() 
    {
        return $this->currencyName;
    }

    public function getCountryCode() 
    {
        return $this->countryCode;
    }

    public function getCountryLetter() 
    {
        return $this->countryLetter;
    }

    public function getCurrencyDisplay() 
    {
        return $this->currencyDisplay;
    }

    public function getSelected() 
    {
        return $this->selected;
    }

    public function getDisplay() 
    {
        return $this->display;
    }

    public function setCountryid($countryid) 
    {
        $this->countryid = $countryid;
    }

    public function setCountry($country) 
    {
        $this->country = $country;
    }

    public function setCurrency($currency) 
    {
        $this->currency = $currency;
    }

    public function setCurrencyName($currencyName) 
    {
        $this->currencyName = $currencyName;
    }

    public function setCountryCode($countryCode) 
    {
        $this->countryCode = $countryCode;
    }

    public function setCountryLetter($countryLetter) 
    {
        $this->countryLetter = $countryLetter;
    }

    public function setCurrencyDisplay($currencyDisplay) 
    {
        $this->currencyDisplay = $currencyDisplay;
    }

    public function setSelected($selected) 
    {
        $this->selected = $selected;
    }

    public function setDisplay($display) 
    {
        $this->display = $display;
    }


}
