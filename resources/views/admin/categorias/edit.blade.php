@extends('layouts.app')

@section('content')
    <h1>Editar Categoria</h1>

    <form action="{{route('admin.categorias.update',['categoria'=>$categoria->id])}}/" method="post">
        <input type="hidden" value="{{csrf_token()}}" name="_token">

        <div class="form-group">
            <label for="">Nome:</label>
            <input class="form-control" type="text" name="name" id="name" value="{{$categoria->name}}">
        </div>

        <div class="form-group">
            <label for="">Descrição:</label>
            <input class="form-control" type="text" name="desc" id="desc" value="{{$categoria->description}}">
        </div>

        <div class="form-group">
            <label for="">Slug:</label>
            <input class="form-control" type="text" name="slug" id="slug" value="{{$categoria->slug}}">
        </div>

        <div class="form-group">
            <label for="">Usuário:</label>
            <select class="form-control" name="user" id="" disabled>
                @foreach($users as $user)
                    <option @if ($user->id == $categoria->user_id) {{ 'selected' }} @endif value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn-success btn-lg">
                Atualizar Categoria
            </button>
        </div>
    </form>
@endsection
