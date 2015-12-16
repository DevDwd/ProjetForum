
@extends('layouts.master')

@section('content')



<div class="row">
        <div class="col-md-6 col-md-offset-4">
            <div class="form-block">
                <legend> Inscription</legend>
               

<form method="POST" action="{{route("auth.register")}}">
    {!! csrf_field() !!}

    <div class="form-group">
        Name
        <input type="text" name="name" value="{{ old('name') }}">
    </div>

    <div class="form-group">
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div class="form-group">
        Password
        <input type="password" name="password">
    </div>

    <div class="form-group">
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Register</button>
    </div>
</form>
                
            </div>
                </div>
                    </div>
    
    @stop