@extends('Base.base')

@section('title','teste')

@section('conteudo')
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- ASIDE -->
                <div id="aside" class="col-md-3">
                    @include('components/sub_categoria')
                    @include('components/sub_price')
                    @include('components/sub_marca')
                </div>

                <div id="store" class="col-md-9">
                    @include('components/ordenacao')
                    <div class="row">
                        @include('components/list_produtos')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
