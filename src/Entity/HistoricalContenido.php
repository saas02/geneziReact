<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistoricalContenido
 *
 * @ORM\Table(name="historical_contenido", indexes={@ORM\Index(name="customer_id", columns={"admin_id"}), @ORM\Index(name="content_id", columns={"contenido_id"})})
 * @ORM\Entity
 */
class HistoricalContenido
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="info", type="text", length=0, nullable=false)
     */
    private $info;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="isActive", type="boolean", nullable=true)
     */
    private $isactive;

    /**
     * @var \Contenido
     *
     * @ORM\ManyToOne(targetEntity="Contenido")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="contenido_id", referencedColumnName="id")
     * })
     */
    private $contenido;

    /**
     * @var \Administrador
     *
     * @ORM\ManyToOne(targetEntity="Administrador")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="admin_id", referencedColumnName="Id")
     * })
     */
    private $admin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInfo(): ?string
    {
        return $this->info;
    }

    public function setInfo(string $info): self
    {
        $this->info = $info;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getIsactive(): ?bool
    {
        return $this->isactive;
    }

    public function setIsactive(?bool $isactive): self
    {
        $this->isactive = $isactive;

        return $this;
    }

    public function getContenido(): ?Contenido
    {
        return $this->contenido;
    }

    public function setContenido(?Contenido $contenido): self
    {
        $this->contenido = $contenido;

        return $this;
    }

    public function getAdmin(): ?Administrador
    {
        return $this->admin;
    }

    public function setAdmin(?Administrador $admin): self
    {
        $this->admin = $admin;

        return $this;
    }


}
