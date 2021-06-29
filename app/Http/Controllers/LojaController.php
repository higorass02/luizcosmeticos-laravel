<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class LojaController extends BaseController
{
    public function index()
    {
        $produtos[] = array(
            'id'                    => 0,
            'img'                   => './img/kit2.png',
            'nome_produto'          => 'produto 1',
            'preco'                 => 9.99,
            'preco_antigo'          => 99.99,
            'novo'                  => true,
            'desconto'              => true,
            'valor_desconto'        => 20,
            'active'                => 1,
            'nome_categoria'        => 'Produtos Profissionais',
            'estrelas'              => 5
        );

        $produtos[] = array(
            'id'                    => 1,
            'img'                   => './img/kit4.png',
            'nome_produto'          => 'produto 2',
            'preco'                 => 1.23,
            'preco_antigo'          => 2.23,
            'novo'                  => false,
            'desconto'              => true,
            'valor_desconto'        => 20,
            'active'                => 1,
            'nome_categoria'        => 'Produtos Profissionais',
            'estrelas'              => 3
        );

        $produtos[] = array(
            'id'                    => 2,
            'img'                   => './img/secador.png',
            'nome_produto'          => 'produto 3',
            'preco'                 => 0.99,
            'preco_antigo'          => 1.99,
            'novo'                  => true,
            'desconto'              => false,
            'valor_desconto'        => 20,
            'active'                => 1,
            'nome_categoria'        => 'Produtos Profissionais',
            'estrelas'              => 1
        );

        $produtos[] = array(
            'id'                    => 2,
            'img'                   => './img/secador.png',
            'nome_produto'          => 'produto 3',
            'preco'                 => 0.99,
            'preco_antigo'          => 1.99,
            'novo'                  => true,
            'desconto'              => false,
            'valor_desconto'        => 20,
            'active'                => 1,
            'nome_categoria'        => 'Produtos Profissionais',
            'estrelas'              => 1
        );

        $produtos[] = array(
            'id'                    => 2,
            'img'                   => './img/secador.png',
            'nome_produto'          => 'produto 3',
            'preco'                 => 0.99,
            'preco_antigo'          => 1.99,
            'novo'                  => true,
            'desconto'              => false,
            'valor_desconto'        => 20,
            'active'                => 1,
            'nome_categoria'        => 'Produtos Profissionais',
            'estrelas'              => 1
        );

        $produtos[] = array(
            'id'                    => 2,
            'img'                   => './img/secador.png',
            'nome_produto'          => 'produto 3',
            'preco'                 => 0.99,
            'preco_antigo'          => 1.99,
            'novo'                  => true,
            'desconto'              => false,
            'valor_desconto'        => 20,
            'active'                => 1,
            'nome_categoria'        => 'Produtos Profissionais',
            'estrelas'              => 1
        );

        $produtos[] = array(
            'id'                    => 2,
            'img'                   => './img/secador.png',
            'nome_produto'          => 'produto 3',
            'preco'                 => 0.99,
            'preco_antigo'          => 1.99,
            'novo'                  => true,
            'desconto'              => false,
            'valor_desconto'        => 20,
            'active'                => 1,
            'nome_categoria'        => 'Produtos Profissionais',
            'estrelas'              => 1
        );

        $produtos[] = array(
            'id'                    => 2,
            'img'                   => './img/secador.png',
            'nome_produto'          => 'produto 3',
            'preco'                 => 0.99,
            'preco_antigo'          => 1.99,
            'novo'                  => true,
            'desconto'              => false,
            'valor_desconto'        => 20,
            'active'                => 1,
            'nome_categoria'        => 'Produtos Profissionais',
            'estrelas'              => 1
        );

        $produtos[] = array(
            'id'                    => 2,
            'img'                   => './img/secador.png',
            'nome_produto'          => 'produto 3',
            'preco'                 => 0.99,
            'preco_antigo'          => 1.99,
            'novo'                  => true,
            'desconto'              => false,
            'valor_desconto'        => 20,
            'active'                => 1,
            'nome_categoria'        => 'Produtos Profissionais',
            'estrelas'              => 1
        );

        return view('Site.store',[
            'products' => $produtos,
        ]);
    }
}
