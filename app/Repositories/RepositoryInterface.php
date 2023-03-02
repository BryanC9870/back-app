<?php

namespace App\Repositories;

interface RepositoryInterface
{
    // declaración de la interfaz del repositorio que contiene los metodos a implementar.
    public function all();
    public function create(array  $data);
    public function update(array $data, $id);
}