<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proveedor
 *
 * @ORM\Table(name="proveedor")
 * @ORM\Entity
 */
class Proveedor
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
     * @var string
     *
     * @ORM\Column(name="NitProveedor", type="string", length=30, nullable=false)
     */
    private $nitproveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="NombreProveedor", type="string", length=30, nullable=false)
     */
    private $nombreproveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="Direccion", type="string", length=200, nullable=false)
     */
    private $direccion;

    /**
     * @var int
     *
     * @ORM\Column(name="Telefono", type="integer", nullable=false)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="PaginaWeb", type="string", length=30, nullable=false)
     */
    private $paginaweb;

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

    public function getNitproveedor(): ?string
    {
        return $this->nitproveedor;
    }

    public function setNitproveedor(string $nitproveedor): self
    {
        $this->nitproveedor = $nitproveedor;

        return $this;
    }

    public function getNombreproveedor(): ?string
    {
        return $this->nombreproveedor;
    }

    public function setNombreproveedor(string $nombreproveedor): self
    {
        $this->nombreproveedor = $nombreproveedor;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): self
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getTelefono(): ?int
    {
        return $this->telefono;
    }

    public function setTelefono(int $telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getPaginaweb(): ?string
    {
        return $this->paginaweb;
    }

    public function setPaginaweb(string $paginaweb): self
    {
        $this->paginaweb = $paginaweb;

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
