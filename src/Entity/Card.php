<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Card
 *
 * @ORM\Table(name="card", indexes={@ORM\Index(name="warrantyCode", columns={"warrantyCode"}), @ORM\Index(name="cybersourceCode", columns={"cybersourceCode"}), @ORM\Index(name="paymentGatewayCode", columns={"paymentGatewayCode"}), @ORM\Index(name="emissionCode", columns={"emissionCode"}), @ORM\Index(name="worldpayCode", columns={"worldpayCode"})})
 * @ORM\Entity
 */
class Card
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
     * @ORM\Column(name="paymentGatewayCode", type="string", length=10, nullable=false)
     */
    private $paymentgatewaycode;

    /**
     * @var string
     *
     * @ORM\Column(name="warrantyCode", type="string", length=10, nullable=false)
     */
    private $warrantycode;

    /**
     * @var string
     *
     * @ORM\Column(name="emissionCode", type="string", length=10, nullable=false)
     */
    private $emissioncode;

    /**
     * @var string
     *
     * @ORM\Column(name="cybersourceCode", type="string", length=10, nullable=false)
     */
    private $cybersourcecode;

    /**
     * @var string
     *
     * @ORM\Column(name="worldpayCode", type="string", length=10, nullable=false)
     */
    private $worldpaycode;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=45, nullable=false)
     */
    private $description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPaymentgatewaycode(): ?string
    {
        return $this->paymentgatewaycode;
    }

    public function setPaymentgatewaycode(string $paymentgatewaycode): self
    {
        $this->paymentgatewaycode = $paymentgatewaycode;

        return $this;
    }

    public function getWarrantycode(): ?string
    {
        return $this->warrantycode;
    }

    public function setWarrantycode(string $warrantycode): self
    {
        $this->warrantycode = $warrantycode;

        return $this;
    }

    public function getEmissioncode(): ?string
    {
        return $this->emissioncode;
    }

    public function setEmissioncode(string $emissioncode): self
    {
        $this->emissioncode = $emissioncode;

        return $this;
    }

    public function getCybersourcecode(): ?string
    {
        return $this->cybersourcecode;
    }

    public function setCybersourcecode(string $cybersourcecode): self
    {
        $this->cybersourcecode = $cybersourcecode;

        return $this;
    }

    public function getWorldpaycode(): ?string
    {
        return $this->worldpaycode;
    }

    public function setWorldpaycode(string $worldpaycode): self
    {
        $this->worldpaycode = $worldpaycode;

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
