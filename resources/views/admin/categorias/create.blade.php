@extends('admin.layout.app')

@section('content')
    <h1>Cadastrar Categoria</h1>

    <form action="{{route('admin.categorias.store')}}" method="post">
        @csrf

        <div class="form-group">
            <label for="">Nome:</label>
            <input class="form-control" type="text" name="name" id="name">
        </div>

        <div class="form-group">
            <label for="">Descrição:</label>
            <input class="form-control" type="text" name="desc" id="desc">
        </div>

        <div class="form-group">
            <label for="">Slug:</label>
            <input class="form-control" type="text" name="slug" id="slug">
        </div>

        <div class="form-group">
            <button type="submit" class="btn-success btn-lg">
                Cadastrar Categoria
            </button>
        </div>
    </form>
@endsection
