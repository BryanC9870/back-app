<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\InvoicesRepositoryInterface;

class InvoicesController extends Controller
{
    /** @var InvoicesRepositoryInterface */
    private $repository;

    // inicializando instancia del repositorio para que el controlador lo pueda usar

    public function __construct(InvoicesRepositoryInterface $repository)  
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $data = $this->repository->all(); // haciendo uso del repositorio
        return response()->json($data);
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function show($invoice)
    {
        $data = $this->repository->find($invoice); // haciendo uso del repositorio
        return response()->json($data);
    }
}
