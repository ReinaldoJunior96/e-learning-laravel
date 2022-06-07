<?php

namespace App\Http\Controllers;

use App\Contracts\CrudRepositoryInterface;

class ProfessorController extends Controller
{
    protected CrudRepositoryInterface $model;

    public function __construct(CrudRepositoryInterface $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        return $this->model->index();
    }

}
