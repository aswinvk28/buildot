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


}
