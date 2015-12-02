<?php

namespace US21\FarmaSaludBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medicamento
 *
 * @ORM\Table(name="medicamento")
 * @ORM\Entity(repositoryClass="US21\FarmaSaludBundle\Entity\MedicamentoRepository")
 */
class Medicamento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreQuimico", type="string", length=255)
     */
    private $nombreQuimico;

    /**
     * @var string
     *
     * @ORM\Column(name="duracionDias", type="string", length=255)
     */
    private $duracionDias;

    /**
     * @var string
     *
     * @ORM\Column(name="duracionHoras", type="string", length=255)
     */
    private $duracionHoras;

    /**
     * @var string
     *
     * @ORM\Column(name="duracionMeses", type="string", length=255)
     */
    private $duracionMeses;

    /**
     * @var string
     *
     * @ORM\Column(name="duracionAnios", type="string", length=255)
     */
    private $duracionAnios;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Medicamento
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Medicamento
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set nombreQuimico
     *
     * @param string $nombreQuimico
     * @return Medicamento
     */
    public function setNombreQuimico($nombreQuimico)
    {
        $this->nombreQuimico = $nombreQuimico;

        return $this;
    }

    /**
     * Get nombreQuimico
     *
     * @return string 
     */
    public function getNombreQuimico()
    {
        return $this->nombreQuimico;
    }

    /**
     * Set duracionDias
     *
     * @param string $duracionDias
     * @return Medicamento
     */
    public function setDuracionDias($duracionDias)
    {
        $this->duracionDias = $duracionDias;

        return $this;
    }

    /**
     * Get duracionDias
     *
     * @return string 
     */
    public function getDuracionDias()
    {
        return $this->duracionDias;
    }

    /**
     * Set duracionHoras
     *
     * @param string $duracionHoras
     * @return Medicamento
     */
    public function setDuracionHoras($duracionHoras)
    {
        $this->duracionHoras = $duracionHoras;

        return $this;
    }

    /**
     * Get duracionHoras
     *
     * @return string 
     */
    public function getDuracionHoras()
    {
        return $this->duracionHoras;
    }

    /**
     * Set duracionMeses
     *
     * @param string $duracionMeses
     * @return Medicamento
     */
    public function setDuracionMeses($duracionMeses)
    {
        $this->duracionMeses = $duracionMeses;

        return $this;
    }

    /**
     * Get duracionMeses
     *
     * @return string 
     */
    public function getDuracionMeses()
    {
        return $this->duracionMeses;
    }

    /**
     * Set duracionAnios
     *
     * @param string $duracionAnios
     * @return Medicamento
     */
    public function setDuracionAnios($duracionAnios)
    {
        $this->duracionAnios = $duracionAnios;

        return $this;
    }

    /**
     * Get duracionAnios
     *
     * @return string 
     */
    public function getDuracionAnios()
    {
        return $this->duracionAnios;
    }
}
