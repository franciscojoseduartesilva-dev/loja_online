<?php

declare(strict_types=1);

namespace App\Controllers\Site;

use App\Helpers\IdSeguro;
use App\Repositories\CategoriaRepository;
use RuntimeException;

final class BuscaController
{
    public function index(): void
    {
        /*
        |--------------------------------------------------------------------------
        | 1. Raiz do projeto
        |--------------------------------------------------------------------------
        */
        $raizProjeto = dirname(__DIR__, 3);

        /*
        |--------------------------------------------------------------------------
        | 2. Conexão com o banco
        |--------------------------------------------------------------------------
        */
        $arquivoConexao = $raizProjeto . '/database/conexao.php';

        if (!is_file($arquivoConexao)) {
            throw new RuntimeException(
                'Arquivo de conexão com o banco não encontrado.'
            );
        }

        require_once $arquivoConexao;

        $pdo = \Config::connect();

        /*
        |--------------------------------------------------------------------------
        | 3. Categorias
        |--------------------------------------------------------------------------
        */
        $categoriaRepository = new CategoriaRepository($pdo);

        $categorias = $categoriaRepository->listarAtivas();

        /*
        |--------------------------------------------------------------------------
        | 4. Gera ID seguro das categorias
        |--------------------------------------------------------------------------
        */
        foreach ($categorias as &$categoria) {
            if (!isset($categoria['id'])) {
                continue;
            }

            $categoria['id_seguro'] = IdSeguro::criptografar(
                (int) $categoria['id']
            );
        }

        unset($categoria);

        /*
        |--------------------------------------------------------------------------
        | 5. Dados específicos da página
        |--------------------------------------------------------------------------
        |
        | As perguntas frequentes podem ser adicionadas futuramente
        | através de um repository ou de uma fonte de dados própria.
        |
        |--------------------------------------------------------------------------
        */

        /*
        |--------------------------------------------------------------------------
        | 6. Localiza a View
        |--------------------------------------------------------------------------
        */
        $arquivoView = $raizProjeto
            . '/views/site/busca.php';

        if (!is_file($arquivoView)) {
            throw new RuntimeException(
                'A página de perguntas frequentes não foi encontrada.'
            );
        }

        /*
        |--------------------------------------------------------------------------
        | 7. Carrega a View
        |--------------------------------------------------------------------------
        |
        | A variável abaixo estará disponível em:
        |
        | views/site/perguntasfrequentes.php
        |
        | $categorias
        |
        |--------------------------------------------------------------------------
        */
        require $arquivoView;
    }
}