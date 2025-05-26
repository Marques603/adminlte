@extends('layouts.default')
@section('page-title', 'Criar Usuário')
@section('content')
<form action="{{ route('users.store') }}" method="post">

    @csrf

  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('name')}}">
    
    @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
  </div>
  <div class="mb-3">
    <label class="form-label ">Email address</label>
    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"  value="{{old('email')}}">
    @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
  </div>

  <!-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div> -->

  <button type="submit" class="btn btn-primary">Criar</button>
</form>
@endsection