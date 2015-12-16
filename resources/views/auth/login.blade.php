@extends('layouts.master')

@section('content')


<div class="row">
        <div class="col-md-6 col-md-offset-4">
            <div class="form-block">
                <legend>Connexion </legend>

<form method="POST" action="{{route("auth.login")}}">
    {!! csrf_field() !!}

    <div class="form-group">
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

     <div class="form-group">
        Password
        <input type="password" name="password" id="password">
    </div>

     <div class="form-group">
        <input type="checkbox" name="remember"> Remember Me
    </div>

     <div class="form-group">
       <button type="submit" class="btn btn-primary">Se connecter</button>
    </div>
</form>
    
    </div>
                </div>
                    </div>
    
@stop