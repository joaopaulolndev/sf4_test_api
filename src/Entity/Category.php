<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
 * @ApiResource()
 */
class Category
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
    private $name;

    /**
     * @var object
     * 
     * @ORM\OneToMany(targetEntity="App\Entity\Movie", mappedBy="category")
     */
    private $movies;

    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of name
     *
     * @return  string
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param  string  $name
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of movies
     *
     * @return  object
     */ 
    public function getMovies()
    {
        return $this->movies;
    }

    /**
     * @param object $movies
     * @return Category
     */
    public function setMovies($movies)
    {
        $this->movies = $movies;
        return $this;
    }
}
