@extends('layouts.app')

@section('content')
    <h1>Cadastrar Produto</h1>

    <form action="{{route('admin.produtos.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="">Nome:</label>
            <input class="form-control" type="text" name="name" id="name" required>
        </div>

        <div class="form-group">
            <label for="">Descrição:</label>
            <input class="form-control" type="text" name="desc" id="desc">
        </div>

        <div class="form-group">
            <label for="">Preço:</label>
            <input class="form-control" type="text" name="preco" id="preco" required>
        </div>

        <div class="form-group">
            <label for="">Categoria:</label>
            <select name="categorias[]" id="categorias" class="form-control" multiple required>
                @foreach($categorias as $categoria)
                    <option value="{{$categoria->id}}"> {{ $categoria->name }} - {{$categoria->description}}</option>
                @endforeach
            </select>
        </div>


        <div class="form-group">
            <label for="">Estrelas</label>
            <select name="estrelas" id="estrelas" class="form-control">
                <option value="1">1 Estrelas</option>
                <option value="2">2 Estrelas</option>
                <option value="3">3 Estrelas</option>
                <option value="4">4 Estrelas</option>
                <option value="5">5 Estrelas</option>
            </select>
        </div>

        <div class="form-group">
            <label for="">Foto:</label>
            <input class="form-control" type="file" name="photo" id="photo">
        </div>

        <div class="form-group">
            <button type="submit" class="btn-success btn-lg">
                Cadastrar Loja
            </button>
        </div>
    </form>

@endsection

@section('javascript')
    <script src="{{ asset('js/admin/products/create.js').'?'.config('app.asset_cache') }}"></script>
@endsection
