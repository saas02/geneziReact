<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DocumentType
 *
 * @ORM\Table(name="document_type", indexes={@ORM\Index(name="externalCode", columns={"externalCode"})})
 * @ORM\Entity
 */
class DocumentType
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
     * @ORM\Column(name="externalCode", type="string", length=10, nullable=false)
     */
    private $externalcode;

    /**
     * @var string
     *
     * @ORM\Column(name="paymentCode", type="string", length=10, nullable=false)
     */
    private $paymentcode;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=50, nullable=false)
     */
    private $description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getExternalcode(): ?string
    {
        return $this->externalcode;
    }

    public function setExternalcode(string $externalcode): self
    {
        $this->externalcode = $externalcode;

        return $this;
    }

    public function getPaymentcode(): ?string
    {
        return $this->paymentcode;
    }

    public function setPaymentcode(string $paymentcode): self
    {
        $this->paymentcode = $paymentcode;

        return $this;
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


}
