@extends('layouts.app')
@section('content')
    <a href="{{route('admin.categorias.create')}}" class="btn btn-success btl-lg">Criar Categoria</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Loja</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $categoria)
                <tr>
                    <td>{{$categoria->id}}</td>
                    <td>{{$categoria->name}}</td>
                    <td>{{$categoria->description}}</td>
                    <td>
                        <a href="{{route('admin.categorias.edit',['categoria'=>$categoria->id])}}" class="btn btn-sm btn-info">Editar</a>
                        <a href="{{route('admin.categorias.destroy',['categoria'=>$categoria->id])}}" class="btn btn-sm btn-danger">Deletar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

{{$categorias->links()}}
@endsection
