@extends('layouts.master')

@section('content')


   <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Forum Ingesup</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            
            <li><a href="#contact">Contact</a></li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
              
            <li><a href="/IngFormV1/public/auth/logout">Se deconnecter</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
        
         <div class="container">
            <div class="content">
                <div class="title">Mon espace....</div>
            </div>
        </div>


@stop