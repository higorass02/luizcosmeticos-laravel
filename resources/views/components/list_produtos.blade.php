<div class="col-md-12">
    <div class="section-title">
        <h3 class="title">Novos Produtos</h3>
        <div class="section-nav">
            <ul class="section-tab-nav tab-nav">
                @foreach ($produtos as $item)
                    @include('components/produto',['produto'=>$item])
                @endforeach
            </ul>
        </div>
    </div>
</div>
