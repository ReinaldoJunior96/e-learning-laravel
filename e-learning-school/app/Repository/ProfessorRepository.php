<?php

namespace App\Repository;
use App\Contracts\CrudRepositoryInterface;
use App\Models\Professor;
use \App\Models\Professor as ProfessorModel;
use Illuminate\Database\Eloquent\Model;

class ProfessorRepository extends AbstractCrudRepository implements CrudRepositoryInterface
{
    protected mixed $model = Professor::class;



}
