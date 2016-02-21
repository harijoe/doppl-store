<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * A repository measure
 *
 * @ORM\Entity
 */
class GithubStarsMeasure
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
     * @var string
     *
     * @ORM\Column(type="string")
     * @Assert\Type(type="string")
     */
    private $repository;

    /**
     * @var int
     *
     * @ORM\Column(type="text")
     * @Assert\Type(type="integer")
     */
    private $stars;

    /**
     * @var \DateTime Date of measure.
     *
     * @ORM\Column(type="datetime")
     * @Assert\DateTime
     */
    private $measureDatetime;

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
     * @return string
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * @param string $repository
     */
    public function setRepository($repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return int
     */
    public function getStars()
    {
        return $this->stars;
    }

    /**
     * @param int $stars
     */
    public function setStars($stars)
    {
        $this->stars = $stars;
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
}
