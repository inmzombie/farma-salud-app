<?php

namespace US21\FarmaSaludBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoMedicamento
 *
 * @ORM\Table(name="tipo_medicamento")
 * @ORM\Entity(repositoryClass="US21\FarmaSaludBundle\Entity\TipoMedicamentoRepository")
 */
class TipoMedicamento
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
     * @ORM\Column(name="clasificacion", type="string", length=255)
     */
    private $clasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="adiministracionTipo", type="string", length=255)
     */
    private $adiministracionTipo;

    /**
     * @ORM\OneToMany(targetEntity="ClasificacionMedicamento", mappedBy="medicamento")
     */
    private $clasificacionesMedicamentos;

    public function __construct() {
        $this->clasificaciones = new ArrayCollection();
    }

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
     * Set clasificacion
     *
     * @param string $clasificacion
     * @return TipoMedicamento
     */
    public function setClasificacion($clasificacion)
    {
        $this->clasificacion = $clasificacion;

        return $this;
    }

    /**
     * Get clasificacion
     *
     * @return string 
     */
    public function getClasificacion()
    {
        return $this->clasificacion;
    }

    /**
     * Set adiministracionTipo
     *
     * @param string $adiministracionTipo
     * @return TipoMedicamento
     */
    public function setAdiministracionTipo($adiministracionTipo)
    {
        $this->adiministracionTipo = $adiministracionTipo;

        return $this;
    }

    /**
     * Get adiministracionTipo
     *
     * @return string 
     */
    public function getAdiministracionTipo()
    {
        return $this->adiministracionTipo;
    }
}
