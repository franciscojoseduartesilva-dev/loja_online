<?php

declare(strict_types=1);

namespace App\Controllers\Site;

use App\Helpers\IdSeguro;
use App\Repositories\CategoriaRepository;
use App\Repositories\ProdutoRepository;
use RuntimeException;

final class ProdutosController
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
        | 3. Categorias do menu
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
            if (isset($categoria['id'])) {
                $categoria['id_seguro'] = IdSeguro::criptografar(
                    (int) $categoria['id']
                );
            }
        }

        unset($categoria);

        /*
        |--------------------------------------------------------------------------
        | 5. Produtos
        |--------------------------------------------------------------------------
        */
        $produtoRepository = new ProdutoRepository($pdo);

        $produtos = $produtoRepository->listarTodos(60);

        /*
        |--------------------------------------------------------------------------
        | 6. Localiza a View
        |--------------------------------------------------------------------------
        */
        $arquivoView = $raizProjeto . '/views/site/produtos.php';

        if (!is_file($arquivoView)) {
            throw new RuntimeException(
                'A página de produtos não foi encontrada.'
            );
        }

        /*
        |--------------------------------------------------------------------------
        | 7. Carrega a View
        |--------------------------------------------------------------------------
        |
        | Variáveis disponíveis em produtos.php:
        |
        | $categorias
        | $produtos
        |
        |--------------------------------------------------------------------------
        */
        require $arquivoView;
    }
}