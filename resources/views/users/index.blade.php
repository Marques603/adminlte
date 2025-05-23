@extends('layouts.default')
@section('page-action')
<a href="{{ route('users.create') }}" class="btn btn-dark">Adicionar</a>
@endsection
@section('page-title', 'Usuários')
@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
    <tr>
      <th scope="row">{{ $user->id }}</th>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
       <td>
<a href="" class="btn btn-dark btn-sm">Editar</a>
<a href="" class="btn btn-danger btn-sm">Deletar</a>

       </td>
    </tr>
@endforeach
  </tbody>
</table>

@endsection