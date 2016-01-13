
@extends('layouts.master')

@section('content')



<div class="row">
        <div class="col-md-6 col-md-offset-4">
            <div class="form-block">
                <legend> Inscription</legend>
               

<form method="POST" action="{{route("auth.register")}}">
    {!! csrf_field() !!}
    <div class="row">
        <div class="col-lg-3">
            <label >Nom</label>
        </div>
        <div class="col-lg-5">
            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
        </div>
    </div>
        
    <div class="row">
        <div class="col-lg-3">
            <label >Email</label>
        </div>
        <div class="col-lg-5">
            <input type="email" class="form-control name="email" value="{{ old('email') }}">
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <label >Password</label>
        </div>
        <div class="col-lg-5">
            <input type="password" class="form-control" name="password">
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <label >Confirm Password</label>
        </div>
        <div class="col-lg-5">
            <input type="password" class="form-control" name="password_confirmation">
        </div>
    </div>

    <div class="frow">
        <div class="col-lg-3">
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </div>
</form>
                
            </div>
                </div>
                    </div>
    
    @stop