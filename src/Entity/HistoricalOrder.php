<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistoricalOrder
 *
 * @ORM\Table(name="historical_order", indexes={@ORM\Index(name="order_id", columns={"order_id"})})
 * @ORM\Entity
 */
class HistoricalOrder
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
     * @ORM\Column(name="payRequest", type="text", length=0, nullable=false)
     */
    private $payrequest;

    /**
     * @var string|null
     *
     * @ORM\Column(name="payResponse", type="text", length=0, nullable=true)
     */
    private $payresponse;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatingDate", type="datetime", nullable=false)
     */
    private $updatingdate;

    /**
     * @var string
     *
     * @ORM\Column(name="publicKey", type="string", length=255, nullable=false)
     */
    private $publickey;

    /**
     * @var \Orders
     *
     * @ORM\ManyToOne(targetEntity="Orders")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_id", referencedColumnName="id")
     * })
     */
    private $order;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPayrequest(): ?string
    {
        return $this->payrequest;
    }

    public function setPayrequest(string $payrequest): self
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

    public function getUpdatingdate(): ?\DateTimeInterface
    {
        return $this->updatingdate;
    }

    public function setUpdatingdate(\DateTimeInterface $updatingdate): self
    {
        $this->updatingdate = $updatingdate;

        return $this;
    }

    public function getPublickey(): ?string
    {
        return $this->publickey;
    }

    public function setPublickey(string $publickey): self
    {
        $this->publickey = $publickey;

        return $this;
    }

    public function getOrder(): ?Orders
    {
        return $this->order;
    }

    public function setOrder(?Orders $order): self
    {
        $this->order = $order;

        return $this;
    }


}
