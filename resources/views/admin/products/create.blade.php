@extends('layouts.app')

@section('content')
    <h1>Cadastrar Produto</h1>

    <form action="{{route('admin.produtos.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="">Nome:</label>
            <input class="form-control" type="text" name="name" id="name">
        </div>

        <div class="form-group">
            <label for="">Preço:</label>
            <input class="form-control" type="text" name="name" id="name">
        </div>

        <div class="form-group">
            <label for="">Categoria:</label>
            <input class="form-control" type="text" name="phone" id="phone">
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
