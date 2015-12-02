<?php

namespace US21\FarmaSaludBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClasificacionMedicamento
 *
 * @ORM\Table(name="calsificacion_medicamento")
 * @ORM\Entity(repositoryClass="US21\FarmaSaludBundle\Entity\ClasificaiconMedicamentoRepository")
 */
class ClasificacionMedicamento
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
     * @ORM\ManyToOne(targetEntity="TipoMedicamento", inversedBy="clasificacionesMedicamentos")
     * @ORM\JoinColumn(name="clasificaciones_medicamentos_id", referencedColumnName="id")
     */
    private $tipoMedicamento;

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
     * @return ClasificaiconMedicamento
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
     * @return ClasificaiconMedicamento
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
}
