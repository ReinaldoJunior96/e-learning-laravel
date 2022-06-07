<?php

namespace App\Services;

use App\Contracts\CrudRepositoryInterface;
use App\Repository\AlunoRepository as AlunoRepository;

class AlunoService
{
    private AlunoRepository $repo;

    public function __construct(AlunoRepository $repo)
    {
        $this->repo = $repo;
    }

    public function index()
    {
        return $this->repo->index();
    }

}
