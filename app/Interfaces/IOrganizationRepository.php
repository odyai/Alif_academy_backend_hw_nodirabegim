<?php
// app/Repositories/Interfaces/IOrganizationRepository.php

namespace App\Interfaces;

interface IOrganizationRepository
{
    public function getAll();
    public function getById($id);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
}
