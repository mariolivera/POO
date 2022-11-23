<?php

declare(strict_types=1);

namespace App\Controller;

class CursoController extends AbstractController
{
    public function listar(): void
    {
        echo "pagina de listar curso";
    }

    public function cadastrar(): void
    {
        echo "pagina de cadastrar curso";
    }

    public function excluir(): void
    {
        echo "pagina de excluir curso";
    }

    public function editar(): void
    {
        echo "pagina de editar curso";
    }
}