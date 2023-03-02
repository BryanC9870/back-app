<?php

namespace App\Repositories;

use App\Models\Invoices;
use Illuminate\Database\Eloquent\ModelNotFoundException;

// declaración de clase que implementará la interfaz del repositorio

class InvoicesRepository implements InvoicesRepositoryInterface
{
    protected $model;

    /**
     * InvoicesRepository constructor.
     *
     * @param Invoices $invoice
     */
    public function __construct(Invoices $invoice)
    {
        $this->model = $invoice;
    }

    public function all()
    {
        return $this->model->all(); // retorna todos los objetos de tipo invoice
    }

    public function create(array $data)
    {
        return $this->model->create($data); // crea un nuevo objeto de tipo invoice
    }

    public function update(array $data, $id)
    {
        return $this->model->where('id', $id)->update($data); // actualiza un objeto de tipo invoice
    }

    public function find($id)
    {
        if(null == $invoice = $this->model->find($id))
        {
            throw new ModelNotFoundException("invoice not found");
        }

        return $invoice; // retorna un objeto de tipo invoice
    }
}