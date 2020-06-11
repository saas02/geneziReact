<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormUserInfo
 *
 * @ORM\Table(name="form_user_info", indexes={@ORM\Index(name="order_id", columns={"order_id"})})
 * @ORM\Entity
 */
class FormUserInfo
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
     * @var string
     *
     * @ORM\Column(name="publicKey", type="string", length=50, nullable=false)
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

    public function getInfo(): ?string
    {
        return $this->info;
    }

    public function setInfo(string $info): self
    {
        $this->info = $info;

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
