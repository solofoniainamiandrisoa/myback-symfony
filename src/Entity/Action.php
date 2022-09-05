<?php

namespace App\Entity;

use App\Repository\ActionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ActionRepository::class)
 */
class Action
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $refdeb;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateaction;

    /**
     * @ORM\Column(type="integer")
     */
    private $typeaction;

    /**
     * @ORM\Column(type="text")
     */
    private $action;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0, nullable=true)
     */
    private $tel;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $adresseVoisi;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $cr;

    /**
     * @ORM\Column(type="float")
     */
    private $lalt;

    /**
     * @ORM\Column(type="float")
     */
    private $lon;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $lieu;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRefdeb(): ?string
    {
        return $this->refdeb;
    }

    public function setRefdeb(string $refdeb): self
    {
        $this->refdeb = $refdeb;

        return $this;
    }

    public function getDateaction(): ?\DateTimeInterface
    {
        return $this->dateaction;
    }

    public function setDateaction(\DateTimeInterface $dateaction): self
    {
        $this->dateaction = $dateaction;

        return $this;
    }

    public function getTypeaction(): ?int
    {
        return $this->typeaction;
    }

    public function setTypeaction(int $typeaction): self
    {
        $this->typeaction = $typeaction;

        return $this;
    }

    public function getAction(): ?string
    {
        return $this->action;
    }

    public function setAction(string $action): self
    {
        $this->action = $action;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(?string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getAdresseVoisi(): ?string
    {
        return $this->adresseVoisi;
    }

    public function setAdresseVoisi(?string $adresseVoisi): self
    {
        $this->adresseVoisi = $adresseVoisi;

        return $this;
    }

    public function getCr(): ?string
    {
        return $this->cr;
    }

    public function setCr(string $cr): self
    {
        $this->cr = $cr;

        return $this;
    }

    public function getLalt(): ?float
    {
        return $this->lalt;
    }

    public function setLalt(float $lalt): self
    {
        $this->lalt = $lalt;

        return $this;
    }

    public function getLon(): ?float
    {
        return $this->lon;
    }

    public function setLon(float $lon): self
    {
        $this->lon = $lon;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }
}
