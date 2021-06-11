@extends('Base.base')

@section('title','teste')

@section('conteudo')
{{--@parent--}}
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="container">
                    <p>Categorias</p>
                </div>
                @foreach ($categorias as $item)
                    <div class="col-md-4 col-xs-6">
                        <div class="shop">
                            <div class="shop-img">
                                <img src="{{$item['img']}}" alt="">
                            </div>
                            <div class="shop-body">
                                <h3>
                                    {{$item['titulo']}}
                                </h3>
                                <a href="{{$item['url']}}" class="cta-btn">Clique Aqui <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>

    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- section title -->
                @include('components/list_produtos')
                <!-- /section title -->

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                            <!-- tab -->
                                @include('components/list_mais_vendidos')
                            <!-- /tab -->
                        </div>
                    </div>
                </div>
                <!-- Products tab & slick -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
@endsection
