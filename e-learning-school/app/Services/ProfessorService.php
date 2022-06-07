<?php

namespace App\Services;

use App\Repository\ProfessorRepository as ProfessorRepository;

class ProfessorService
{

    private ProfessorRepository $repo;

    public function __construct(ProfessorRepository $repo)
    {
        $this->repo = $repo;
    }
    public function index()
    {
        return $this->repo->index();
    }
}
