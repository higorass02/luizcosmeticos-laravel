<div class="product-widget">
    <div class="product-img">
        <img src="{{ $produto['img'] }}" alt="">
    </div>
    <div class="product-body">
        <p class="product-category">{{ $produto['nome_categoria'] }}</p>
        <h3 class="product-name"><a href="#">{{ $produto['nome_produto'] }}</a></h3>

        @if($produto['desconto'])
            <h4 class="product-price">R$ {{ $produto['preco'] }} <del class="product-old-price">R$ {{ $produto['preco_antigo'] }}</del></h4>
        @else
            <h4 class="product-price">R$ {{ $produto['preco'] }}</h4>
        @endif

    </div>
</div>
