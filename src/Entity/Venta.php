<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Venta
 *
 * @ORM\Table(name="venta", indexes={@ORM\Index(name="IdCliente", columns={"IdCliente"})})
 * @ORM\Entity
 */
class Venta
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
     * @var string
     *
     * @ORM\Column(name="TotalPagar", type="decimal", precision=30, scale=2, nullable=false)
     */
    private $totalpagar;

    /**
     * @var string
     *
     * @ORM\Column(name="Estado", type="string", length=150, nullable=false)
     */
    private $estado;

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
     * @var \Cliente
     *
     * @ORM\ManyToOne(targetEntity="Cliente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdCliente", referencedColumnName="Id")
     * })
     */
    private $idcliente;

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

    public function getTotalpagar()
    {
        return $this->totalpagar;
    }

    public function setTotalpagar($totalpagar): self
    {
        $this->totalpagar = $totalpagar;

        return $this;
    }

    public function getEstado(): ?string
    {
        return $this->estado;
    }

    public function setEstado(string $estado): self
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

    public function getIdcliente(): ?Cliente
    {
        return $this->idcliente;
    }

    public function setIdcliente(?Cliente $idcliente): self
    {
        $this->idcliente = $idcliente;

        return $this;
    }


}
