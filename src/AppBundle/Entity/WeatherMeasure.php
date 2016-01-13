<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * A weather measure.
 * 
 * @ORM\Entity
 */
class WeatherMeasure
{
    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var \DateTime Date of measure.
     *
     * @ORM\Column(type="datetime", nullable=true)
     * @Assert\DateTime
     */
    private $measureDatetime;
    /**
     * @var int temperature
     *
     * @ORM\Column(type="decimal", nullable=true, scale=2)
     * @Assert\Type(type="float")
     */
    private $temperature;
    /**
     * @var int Luminance
     *
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\Type(type="integer")
     */
    private $luminance;
    /**
     * @var int The number of pages in the book.
     *
     * @ORM\Column(type="decimal", nullable=true, scale=2)
     * @Assert\Type(type="float")
     */
    private $humidity;

    public function __construct()
    {
        $this->measureDatetime = new \DateTime();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return \DateTime
     */
    public function getMeasureDatetime()
    {
        return $this->measureDatetime;
    }

    /**
     * @param \DateTime $measureDatetime
     */
    public function setMeasureDatetime($measureDatetime)
    {
        $this->measureDatetime = $measureDatetime;
    }

    /**
     * @return int
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * @param int $temperature
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;
    }

    /**
     * @return int
     */
    public function getLuminance()
    {
        return $this->luminance;
    }

    /**
     * @param int $luminance
     */
    public function setLuminance($luminance)
    {
        $this->luminance = $luminance;
    }

    /**
     * @return int
     */
    public function getHumidity()
    {
        return $this->humidity;
    }

    /**
     * @param int $humidity
     */
    public function setHumidity($humidity)
    {
        $this->humidity = $humidity;
    }
}
