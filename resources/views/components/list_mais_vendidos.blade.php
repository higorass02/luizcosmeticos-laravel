<div class="col-md-4 col-xs-6">
    <div class="section-title">
        <h4 class="title">Mais Vendidos</h4>
        <div class="section-nav">
            <div id="slick-nav-3" class="products-slick-nav"></div>
        </div>
    </div>
    <div class="products-widget-slick" data-nav="#slick-nav-3">
        <div>

            @foreach ($produtosMaisVendidos as $item)
                @include('components/item_mais_vendido',['produto'=>$item])
            @endforeach

        </div>
    </div>
</div>
