<!DOCTYPE html>
<html>
    <head>
        <title>Projet Forum Ingesup </title>
            
            

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
           
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
    <nav class="navbar navbar-default navbar-static-top">
      <div class="navbar-header">
       <img src="{{url('http://www.y-nov.com/wp-content/themes/lch/img/logo.png')}} ">
      
          
     
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{route("auth.login")}}">Se connecter</a></li>
            <li><a href="{{route("auth.register")}}">Inscription</a></li>
        </ul>
    </div>
    </nav>
            
        <div class="container">
            <div class="content">
            <img src="{{url('http://forex-ecole.com/wp-content/uploads/2015/03/forum.jpg')}} ">
                <div class="title">Bienvue sur Ingforum....</div>
            </div>
        </div>
    </body>
</html>
