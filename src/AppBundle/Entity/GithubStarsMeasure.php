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
     * @var string
     *
     * @ORM\Column(type="text")
     * @Assert\Type(type="string")
     */
    private $content;

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
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
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
