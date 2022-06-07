<?php

namespace App\Repository;

use App\Contracts\CrudRepositoryInterface;
use App\Models\Aluno;
use \App\Models\Aluno as AlunoModel;
use Illuminate\Database\Eloquent\Model;


class AlunoRepository extends AbstractCrudRepository implements CrudRepositoryInterface
{
    protected mixed $model = Aluno::class;
}


