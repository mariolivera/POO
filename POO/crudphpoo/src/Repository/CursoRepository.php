<?php

declare(strict_types=1);

namespace App\Repository;

class CursoRepository implements RepositoryInterface
{
    public function BuscarTodos(): iterable
    {
        return [];
    }
    public function buscarUm(string $id): ?object
    {
        return new \stdClass();
    }
    public function inserir(object $dados): object
    {
        return $dados;
    }
    public function atualizar(object $dados, string $id): object
    {
        return $dados;
    }
    public function excluir(string $id): void
    {
        
    }
}