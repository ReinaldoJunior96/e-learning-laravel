<?php

namespace App\Providers;

use App\Contracts\CrudRepositoryInterface;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ProfessorController;
use App\Repository\AlunoRepository;
use App\Repository\ProfessorRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->when(AlunoController::class)
            ->needs(CrudRepositoryInterface::class)
            ->give(AlunoRepository::class);

        $this->app->when(ProfessorController::class)
            ->needs(CrudRepositoryInterface::class)
            ->give(ProfessorRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
