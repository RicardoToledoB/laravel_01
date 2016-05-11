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

            <a  href="{{ url('/users/nuevo') }}" class="btn btn-primary" > Nuevo Usuario </a>
            <br><br>
            <div class="panel panel-default">
                <div class="panel-heading">Listado de Usuarios</div>
                <div class="panel-body">
                   {!! Form::open(array('url' => 'users/index','method' => 'get','class' => 'form-inline')) !!}
                    <div class="form-group">
                        {{ Form::label('nombre', 'Buscar') }}
                        {{ Form::text('nombre','', array('class' => 'form-control','placeholder'=>'Buscar por Nombre'))  }}
                        {{ Form::submit('Buscar',array('class' => 'btn btn-primary')) }}
                    </div>
                    {!! Form::close() !!} 
                    <br>

                    <table class="table table-condensed table-hover table-striped">
                        <tr>
                        <thead>
                        <th>#</th>
                        <th>NOMBRE</th>
                        <th>CREADO</th>
                        <th width="5%">Eliminar</th>
                        <th width="5%">Editar</th>
                        <th width="5%">Detalle</th>
                        </thead>
                        <tbody>
                            @foreach($data as $user) 
                            <tr>
                                <td>
                                    {{ $user->id  }}
                                </td>
                                <td>
                                    {{ $user->nombre }}
                                </td>
                                <td>
                                    {{ $user->created_at }}
                                </td>
                                <td>
                                    {!! Form::open(['route' => ['usersDelete', $user->id], 'method' => 'DELETE']) !!} 
                                    <input type="submit" value="eliminar" class="btn btn-xs btn-danger">
                                    {!! Form::close() !!}
                                </td>
                                <td>
                                    <a href="{{ url('/users/edit/'.$user->id) }}" class="btn btn-xs btn-info">
                                        editar 
                                    </a>

                                </td>
                                <td>
                                    <a href="{{ url('/users/detalle/'.$user->id) }}" class="btn btn-xs btn-success">
                                        editar 
                                    </a>

                                </td>
                            </tr>
                            @endforeach 


                        </tbody>

                        </tr>
                    </table>
                    <br>
                    <!--{!! $data->links() !!}-->


                    {!! $data->appends(['nombre' => \Request::get('nombre')])->links() !!}
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


