@extends('layouts.master')
@section('title','Register User')
@section('content')
    @include('error.errors')
    @if(session('regSuc'))
        {{ session('regSuc') }}
    @endif
    <div class="row mt-5">
        <div class="col-sm-8 offset-sm-2">
<form action="" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" id = "name" class="form-control">
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" id = "password" class="form-control">
    </div>
    <input type="submit" name="submit" value="Login" class = "btn btn-success">
</form>
        </div>
    </div>
@endsection

