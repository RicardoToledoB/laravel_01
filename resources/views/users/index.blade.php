

Listado de Usuarios.
<br>

<a  href="{{ url('/users/nuevo') }}" > Nuevo Usuario </a>

<table border="1">
    <tr>
    <thead>
    <th>#</th>
    <th>NOMBRE</th>
    <th>CREADO</th>
    <th>ACCIONES</th>
</thead>
<tbody>
    @foreach($usuarios as $user) 
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
                <input type="submit" value="eliminar">
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach 
</tbody>

</tr>
</table>