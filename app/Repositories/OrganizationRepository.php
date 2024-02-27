<?php



namespace App\Repositories;

use App\Models\Organization;
use App\Interfaces\IOrganizationRepository;

class OrganizationRepository implements IOrganizationRepository
{
    public function getAll()
    {
        return Organization::all();
    }

    public function getById($id)
    {
        return Organization::find($id);
    }

    public function create(array $data)
    {
        return Organization::create($data);
    }

    public function update($id, array $data)
    {
        $organization = Organization::find($id);
        $organization->update($data);
        return $organization;
    }

    public function delete($id)
    {
        $organization = Organization::find($id);
        if ($organization) {
            $organization->delete();
            return true;
        }
        return false;
    }
}

