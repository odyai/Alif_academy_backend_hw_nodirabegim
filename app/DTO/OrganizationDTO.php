<?php

namespace App\DTO;



use App\Models\Organization;

class OrganizationDTO
{
    public string $name;
    public string $website;
    public string $email;

    public function __construct(string $name, string $website, string $email)
    {
        $this->name = $name;
        $this->website = $website;
        $this->email = $email;
    }

    public static function fromModel(Organization $organization): self
    {
        return new self(
            $organization->name,
            $organization->website,
            $organization->email
        );
    }
}
