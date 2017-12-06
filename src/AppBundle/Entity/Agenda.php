<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 3.0.3 (doctrine2-annotation) on 2017-12-05 19:50:12.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity\Agenda
 *
 * @ORM\Entity(repositoryClass="AgendaRepository")
 * @ORM\Table(name="agenda", indexes={@ORM\Index(name="fk_agenda_disponibilidad_idx", columns={"disponibilidad_id"}), @ORM\Index(name="fk_agenda_usuario_idx", columns={"usuario_id"})})
 */
class Agenda
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $disponibilidad_id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $usuario_id;

    /**
     * @ORM\ManyToOne(targetEntity="Disponibilidad", inversedBy="agendas")
     * @ORM\JoinColumn(name="disponibilidad_id", referencedColumnName="id")
     */
    protected $disponibilidad;

    /**
     * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="agendas")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     */
    protected $usuario;

    public function __construct()
    {
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \Entity\Agenda
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of id.
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of disponibilidad_id.
     *
     * @param integer $disponibilidad_id
     * @return \Entity\Agenda
     */
    public function setDisponibilidadId($disponibilidad_id)
    {
        $this->disponibilidad_id = $disponibilidad_id;

        return $this;
    }

    /**
     * Get the value of disponibilidad_id.
     *
     * @return integer
     */
    public function getDisponibilidadId()
    {
        return $this->disponibilidad_id;
    }

    /**
     * Set the value of usuario_id.
     *
     * @param integer $usuario_id
     * @return \Entity\Agenda
     */
    public function setUsuarioId($usuario_id)
    {
        $this->usuario_id = $usuario_id;

        return $this;
    }

    /**
     * Get the value of usuario_id.
     *
     * @return integer
     */
    public function getUsuarioId()
    {
        return $this->usuario_id;
    }

    /**
     * Set Disponibilidad entity (many to one).
     *
     * @param \Entity\Disponibilidad $disponibilidad
     * @return \Entity\Agenda
     */
    public function setDisponibilidad(Disponibilidad $disponibilidad = null)
    {
        $this->disponibilidad = $disponibilidad;

        return $this;
    }

    /**
     * Get Disponibilidad entity (many to one).
     *
     * @return \Entity\Disponibilidad
     */
    public function getDisponibilidad()
    {
        return $this->disponibilidad;
    }

    /**
     * Set Usuario entity (many to one).
     *
     * @param \Entity\Usuario $usuario
     * @return \Entity\Agenda
     */
    public function setUsuario(Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get Usuario entity (many to one).
     *
     * @return \Entity\Usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    public function __sleep()
    {
        return array('id', 'disponibilidad_id', 'usuario_id');
    }
}
