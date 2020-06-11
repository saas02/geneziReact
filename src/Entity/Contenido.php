<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contenido
 *
 * @ORM\Table(name="contenido", indexes={@ORM\Index(name="IDX_31780935A76ED395", columns={"admin_id"})})
 * @ORM\Entity
 */
class Contenido
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
     * @ORM\Column(name="title", type="string", length=100, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=0, nullable=false)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text", type="text", length=0, nullable=true)
     */
    private $text;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="publicationStartDate", type="datetime", nullable=false)
     */
    private $publicationstartdate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="publicationEndDate", type="datetime", nullable=true)
     */
    private $publicationenddate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creationDate", type="datetime", nullable=false)
     */
    private $creationdate;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=100, nullable=false)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="keywords", type="string", length=500, nullable=false)
     */
    private $keywords;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="isActive", type="boolean", nullable=true)
     */
    private $isactive;

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

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

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

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getPublicationstartdate(): ?\DateTimeInterface
    {
        return $this->publicationstartdate;
    }

    public function setPublicationstartdate(\DateTimeInterface $publicationstartdate): self
    {
        $this->publicationstartdate = $publicationstartdate;

        return $this;
    }

    public function getPublicationenddate(): ?\DateTimeInterface
    {
        return $this->publicationenddate;
    }

    public function setPublicationenddate(?\DateTimeInterface $publicationenddate): self
    {
        $this->publicationenddate = $publicationenddate;

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

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getKeywords(): ?string
    {
        return $this->keywords;
    }

    public function setKeywords(string $keywords): self
    {
        $this->keywords = $keywords;

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
