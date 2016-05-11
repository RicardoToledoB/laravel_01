<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>CRUD LARAVEL</title>
        {!! Html::style('template/css/bootstrap.min.css') !!}
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">By Laravel</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{ url('/users/index') }}">Usuario</a></li>
                        <li><a href="{{ url('/cities/index') }}">Ciudades</a></li>
                        <li><a href="{{ url('/contacts/index') }}">Acerca De</a></li>
                        <li><a href="#">Cerrar Sesion</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class="container">
            <br><br><br>

            <br><br>
            <div class="panel panel-default">
                <div class="panel-heading">Editar Usuario Seleccionado</div>
                <div class="panel-body">
                    <br>
                    {!! Form::model($usuario, ['route' => ['userUpdate', $usuario->id],'method'=>'PUT']) !!}
                     <div class="form-group">
                        {{ Form::label('nombre', 'Nombre') }}
                        {!! Form::text('nombre', null) !!}
                    </div>
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    {!! Form::submit('Actualizar') !!}
                    {!! Form::close() !!}  
                </div>
            </div>
        </div><!-- /.container -->
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        {!! Html::script('template/js/jquery.min.js') !!}
        {!! Html::script('template/js/bootstrap.min.js') !!}
    </body>
</html>








 
 
 