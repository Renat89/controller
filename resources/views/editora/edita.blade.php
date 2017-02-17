@extends('layouts.master')

@section('title', 'Edição da editora')

@section('page-header-content', 'Edição da editora')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Ações</h3>
        </div>
        <div class="panel-body">
          <a href="/editoras">
            <span class="glyphicon glyphicon-th-list"></span> Editoras
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <form action="/editoras/{{$editora->id}}" method="POST">
        {{csrf_field()}}
        {{method_field('PATCH')}} <!-- gambiarra do laravel pois o browser não entende o tipo PUT/PATCH-->

        <div class="form-group">
          <label for="nome">Nome</label>
          <input value="{{$editora->nome}}" name="nome" id="nome" type="text" class="form-control"> <!-- novo -->
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input value="{{$editora->email}}" name="email" id="email" type="text" class="form-control"> <!-- novo -->
        </div>
        <button class="btn btn-primary">Salvar</button>
      </form>
    </div>
  </div>
@endsection
