<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 *
 * @ORM\Table(name="orders", indexes={@ORM\Index(name="id_cliente", columns={"idCliente"})})
 * @ORM\Entity
 */
class Orders
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
     * @ORM\Column(name="description", type="text", length=0, nullable=false)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="payRequest", type="text", length=0, nullable=true)
     */
    private $payrequest;

    /**
     * @var string|null
     *
     * @ORM\Column(name="payResponse", type="text", length=0, nullable=true)
     */
    private $payresponse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="publicKey", type="string", length=255, nullable=true)
     */
    private $publickey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="text", length=0, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="resume", type="text", length=65535, nullable=true)
     */
    private $resume;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creationDate", type="datetime", nullable=false)
     */
    private $creationdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatingDate", type="datetime", nullable=false)
     */
    private $updatingdate;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=false)
     */
    private $status;

    /**
     * @var \Cliente
     *
     * @ORM\ManyToOne(targetEntity="Cliente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCliente", referencedColumnName="Id")
     * })
     */
    private $idcliente;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPayrequest(): ?string
    {
        return $this->payrequest;
    }

    public function setPayrequest(?string $payrequest): self
    {
        $this->payrequest = $payrequest;

        return $this;
    }

    public function getPayresponse(): ?string
    {
        return $this->payresponse;
    }

    public function setPayresponse(?string $payresponse): self
    {
        $this->payresponse = $payresponse;

        return $this;
    }

    public function getPublickey(): ?string
    {
        return $this->publickey;
    }

    public function setPublickey(?string $publickey): self
    {
        $this->publickey = $publickey;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getResume(): ?string
    {
        return $this->resume;
    }

    public function setResume(?string $resume): self
    {
        $this->resume = $resume;

        return $this;
    }

    public function getCreationdate(): ?\DateTimeInterface
    {
        return $this->creationdate;
    }

    public function setCreationdate(\DateTimeInterface $creationdate): self
    {
        $this->creationdate = $creationdate;

        return $this;
    }

    public function getUpdatingdate(): ?\DateTimeInterface
    {
        return $this->updatingdate;
    }

    public function setUpdatingdate(\DateTimeInterface $updatingdate): self
    {
        $this->updatingdate = $updatingdate;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

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
