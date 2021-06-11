<div class="col-md-4 col-xs-6">
    <div class="product">
        <div class="product-img">
            <img src="{{ $produto['img'] }}" alt="">
            <div class="product-label">

                @if($produto['desconto'] == true)
                    <span class="sale">{{ $produto['valor_desconto'] }}</span>;
                @endif
                @if($produto['novo'])
                    <span class="new">NEW</span>
                @endif

            </div>
        </div>
        <div class="product-body">
            <p class="product-category">{{ $produto['nome_categoria'] }}</p>
            <h3 class="product-name"><a href="#">{{$produto['nome_produto']}}</a></h3>

            @if($produto['desconto'])
                <h4 class="product-price">R$ {{ $produto['preco'] }} <del class="product-old-price">R$ {{ $produto['preco_antigo'] }}</del></h4>
            @else
                <h4 class="product-price">R$ {{ $produto['preco'] }}</h4>
            @endif

            <div class="product-rating">
                @for ($i=0;$i<$produto['estrelas'];$i++)
                    <i style="margin: 1px;" class="fa fa-star"></i>
                @endfor
            </div>
            <div class="product-btns">
                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Clique para Ver</span></button>
            </div>
        </div>
        <div class="add-to-cart">
            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Entrar em Contato</button>
        </div>
    </div>
</div>
