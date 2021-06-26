<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class SiteController extends BaseController {

    public function index()
    {
        $categorias[] = array(
        'id'            => 1,
        'titulo'        => 'Ofertas',
        'url'           => '#store',
        'img'           => './img/kit5.png',
        'active'        => false
        );

        $categorias[] = array(
        'id'            => 2,
        'titulo'        => 'Produtos Profissionais',
        'url'           => 'store.php?categoria=2',
        'img'           => './img/kit2.png',
        'active'        => false
        );

        $categorias[] = array(
        'id'            => 3,
        'titulo'        => 'Lançamentos',
        'url'           => 'store.php?categoria=3',
        'img'           => './img/secador.png',
        'active'        => false
        );

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

        $produtosMaisVendidos[] = array(
        'id'                    => 0,
        'img'                   => './img/kit4.png',
        'nome_produto'          => 'produto 1',
        'preco'                 => 9.99,
        'preco_antigo'          => 99.99,
        'desconto'              => true,
        'nome_categoria'        => 'Produtos Profissionais',
        );

        $produtosMaisVendidos[] = array(
        'id'                    => 1,
        'img'                   => './img/kit2.png',
        'nome_produto'          => 'produto 2',
        'preco'                 => 1.23,
        'preco_antigo'          => 2.23,
        'desconto'              => false,
        'nome_categoria'        => 'Produtos Profissionais',
        );

        $produtosMaisVendidos[] = array(
        'id'                    => 2,
        'img'                   => './img/secador.png',
        'nome_produto'          => 'produto 3',
        'preco'                 => 0.99,
        'preco_antigo'          => 1.99,
        'desconto'              => false,
        'nome_categoria'        => 'Produtos Profissionais',
        );

        return view('Site.homepage',[
            'categorias' => $categorias,
            'produtos' => $produtos,
            'produtosMaisVendidos' => $produtosMaisVendidos,
        ]);
    }
}
