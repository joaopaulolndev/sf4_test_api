<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MovieRepository")
 * @ApiResource()
 */
class Movie
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * 
     * @ORM\Column(type="string")
     */
    private $title;

    /**
     * @var string
     * 
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @var \Datetime
     * 
     * @ORM\Column(type="date")
     */
    private $release_date;

    /**
     * @var object
     * 
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="movies" )
     */
    private $category;

    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of title
     *
     * @return  string
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @param  string  $title
     *
     * @return  self
     */ 
    public function setTitle(string $title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of description
     *
     * @return  string
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @param  string  $description
     *
     * @return  self
     */ 
    public function setDescription(string $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of release_date
     *
     * @return  \Datetime
     */ 
    public function getReleaseDate()
    {
        return $this->release_date;
    }

    /**
     * Set the value of release_date
     *
     * @param  \Datetime  $release_date
     *
     * @return  self
     */ 
    public function setReleaseDate(\Datetime $release_date)
    {
        $this->release_date = $release_date;

        return $this;
    }

    /**
     * Get the value of category
     *
     * @return  object
     */ 
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @param  object  $category
     *
     * @return  self
     */ 
    public function setCategory(object $category)
    {
        $this->category = $category;

        return $this;
    }
}
