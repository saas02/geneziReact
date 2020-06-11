<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Detalle
 *
 * @ORM\Table(name="detalle")
 * @ORM\Entity
 */
class Detalle
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="NumPedido", type="integer", nullable=false)
     */
    private $numpedido;

    /**
     * @var int
     *
     * @ORM\Column(name="CantidadProductos", type="integer", nullable=false)
     */
    private $cantidadproductos;

    /**
     * @var int
     *
     * @ORM\Column(name="Promocion", type="integer", nullable=false)
     */
    private $promocion;

    /**
     * @var int
     *
     * @ORM\Column(name="IdProducto", type="integer", nullable=false)
     */
    private $idproducto;

    /**
     * @var int
     *
     * @ORM\Column(name="Estado", type="integer", nullable=false, options={"default"="1"})
     */
    private $estado = '1';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Creado", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $creado = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Actualizado", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $actualizado = 'CURRENT_TIMESTAMP';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumpedido(): ?int
    {
        return $this->numpedido;
    }

    public function setNumpedido(int $numpedido): self
    {
        $this->numpedido = $numpedido;

        return $this;
    }

    public function getCantidadproductos(): ?int
    {
        return $this->cantidadproductos;
    }

    public function setCantidadproductos(int $cantidadproductos): self
    {
        $this->cantidadproductos = $cantidadproductos;

        return $this;
    }

    public function getPromocion(): ?int
    {
        return $this->promocion;
    }

    public function setPromocion(int $promocion): self
    {
        $this->promocion = $promocion;

        return $this;
    }

    public function getIdproducto(): ?int
    {
        return $this->idproducto;
    }

    public function setIdproducto(int $idproducto): self
    {
        $this->idproducto = $idproducto;

        return $this;
    }

    public function getEstado(): ?int
    {
        return $this->estado;
    }

    public function setEstado(int $estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    public function getCreado(): ?\DateTimeInterface
    {
        return $this->creado;
    }

    public function setCreado(\DateTimeInterface $creado): self
    {
        $this->creado = $creado;

        return $this;
    }

    public function getActualizado(): ?\DateTimeInterface
    {
        return $this->actualizado;
    }

    public function setActualizado(\DateTimeInterface $actualizado): self
    {
        $this->actualizado = $actualizado;

        return $this;
    }


}
