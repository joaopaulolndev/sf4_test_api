<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FilmeRepository")
 */
class Filme
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
    private $titulo;

    /**
     * @var string
     * 
     * @ORM\Column(type="text")
     */
    private $descricao;

    /**
     * @var \Datetime
     * 
     * @ORM\Column(type="date")
     */
    private $data_lancamento;

    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of titulo
     *
     * @return  string
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @param  string  $titulo
     *
     * @return  self
     */ 
    public function setTitulo(string $titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of descricao
     *
     * @return  string
     */ 
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     *
     * @param  string  $descricao
     *
     * @return  self
     */ 
    public function setDescricao(string $descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of data_lancamento
     *
     * @return  \Datetime
     */ 
    public function getDataLancamento()
    {
        return $this->data_lancamento;
    }

    /**
     * Set the value of data_lancamento
     *
     * @param  \Datetime  $data_lancamento
     *
     * @return  self
     */ 
    public function setDataLancamento(\Datetime $data_lancamento)
    {
        $this->data_lancamento = $data_lancamento;

        return $this;
    }
}
