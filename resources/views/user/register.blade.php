@extends('layouts.master')
@section('title','Register User')
@section('content')
    <div class="row mt-5">
        <div class="col-sm-8 offset-sm-2">
            @include('error.errors')
            <form action="{{ route('user.register') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" value="{{ old('name') }}"id = "email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" value="{{ old('email') }}" id = "email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id = "password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password Confirmation:</label>
                    <input type="password" name="password_confirmation" id = "password" class="form-control">
                </div>
                <input type="submit" name="submit" value="Register" class = "btn btn-success">
            </form>
        </div>
    </div>
@endsection
