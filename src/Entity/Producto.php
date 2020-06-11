<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Producto
 *
 * @ORM\Table(name="producto", indexes={@ORM\Index(name="idCategoria", columns={"idCategoria"}), @ORM\Index(name="IdProveedor", columns={"IdProveedor"})})
 * @ORM\Entity(repositoryClass="App\Repository\ProductoRepository")
 */
class Producto
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
     * @ORM\Column(name="CodigoProd", type="string", length=30, nullable=false)
     */
    private $codigoprod;

    /**
     * @var string
     *
     * @ORM\Column(name="NombreProd", type="string", length=30, nullable=false)
     */
    private $nombreprod;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Descripcion", type="text", length=65535, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio", type="decimal", precision=30, scale=0, nullable=false)
     */
    private $precio;

    /**
     * @var string
     *
     * @ORM\Column(name="Modelo", type="string", length=30, nullable=false)
     */
    private $modelo;

    /**
     * @var string
     *
     * @ORM\Column(name="Marca", type="string", length=30, nullable=false)
     */
    private $marca;

    /**
     * @var int
     *
     * @ORM\Column(name="Stock", type="integer", nullable=false)
     */
    private $stock;

    /**
     * @var string
     *
     * @ORM\Column(name="Imagen", type="text", length=65535, nullable=false)
     */
    private $imagen;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=30, nullable=false)
     */
    private $nombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Color", type="string", length=255, nullable=true)
     */
    private $color;

    /**
     * @var int|null
     *
     * @ORM\Column(name="inHome", type="integer", nullable=true)
     */
    private $inhome;

    /**
     * @var int|null
     *
     * @ORM\Column(name="InPromo", type="integer", nullable=true)
     */
    private $inpromo;

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

    /**
     * @var \Proveedor
     *
     * @ORM\ManyToOne(targetEntity="Proveedor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdProveedor", referencedColumnName="Id")
     * })
     */
    private $idproveedor;

    /**
     * @var \Categoria
     *
     * @ORM\ManyToOne(targetEntity="Categoria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCategoria", referencedColumnName="Id")
     * })
     */
    private $idcategoria;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodigoprod(): ?string
    {
        return $this->codigoprod;
    }

    public function setCodigoprod(string $codigoprod): self
    {
        $this->codigoprod = $codigoprod;

        return $this;
    }

    public function getNombreprod(): ?string
    {
        return $this->nombreprod;
    }

    public function setNombreprod(string $nombreprod): self
    {
        $this->nombreprod = $nombreprod;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(?string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function setPrecio($precio): self
    {
        $this->precio = $precio;

        return $this;
    }

    public function getModelo(): ?string
    {
        return $this->modelo;
    }

    public function setModelo(string $modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    public function getMarca(): ?string
    {
        return $this->marca;
    }

    public function setMarca(string $marca): self
    {
        $this->marca = $marca;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function getImagen(): ?string
    {
        return $this->imagen;
    }

    public function setImagen(string $imagen): self
    {
        $this->imagen = $imagen;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getInhome(): ?int
    {
        return $this->inhome;
    }

    public function setInhome(?int $inhome): self
    {
        $this->inhome = $inhome;

        return $this;
    }

    public function getInpromo(): ?int
    {
        return $this->inpromo;
    }

    public function setInpromo(?int $inpromo): self
    {
        $this->inpromo = $inpromo;

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

    public function getIdproveedor(): ?Proveedor
    {
        return $this->idproveedor;
    }

    public function setIdproveedor(?Proveedor $idproveedor): self
    {
        $this->idproveedor = $idproveedor;

        return $this;
    }

    public function getIdcategoria(): ?Categoria
    {
        return $this->idcategoria;
    }

    public function setIdcategoria(?Categoria $idcategoria): self
    {
        $this->idcategoria = $idcategoria;

        return $this;
    }


}
