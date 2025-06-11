<?php

namespace Jetimob\Asaas\Entity\Account;

use Jetimob\Asaas\Entity\Entity;

class City extends Entity
{
    protected ?string $object;
    protected ?int $id;
    protected ?string $ibgeCode;
    protected ?string $name;
    protected ?string $districtCode;
    protected ?string $district;
    protected ?string $state;

    public function getObject(): ?string
    {
        return $this->object;
    }

    public function setObject(?string $object): self
    {
        $this->object = $object;
        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getIbgeCode(): ?string
    {
        return $this->ibgeCode;
    }

    public function setIbgeCode(?string $ibgeCode): self
    {
        $this->ibgeCode = $ibgeCode;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getDistrictCode(): ?string
    {
        return $this->districtCode;
    }

    public function setDistrictCode(?string $districtCode): self
    {
        $this->districtCode = $districtCode;
        return $this;
    }

    public function getDistrict(): ?string
    {
        return $this->district;
    }

    public function setDistrict(?string $district): self
    {
        $this->district = $district;
        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;
        return $this;
    }
}
