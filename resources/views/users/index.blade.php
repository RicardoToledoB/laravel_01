

Listado de Usuarios.
<br>
<a href="nuevo">Nuevo Usuario</a>

<table border="1">
    <tr>
    <thead>
    <th>#</th>
    <th>NOMBRE</th>
    <th>CREADO</th>
    <th>ACCIONES</th>
    </thead>
    <tbody>
        <?php foreach($usuarios as $user) {?>
        <tr>
            <td>
                <?php echo $user->id ?>
            </td>
             <td>
                <?php echo $user->nombre ?>
            </td>
             <td>
                <?php echo $user->created_at ?>
            </td>
             <td>
                 <a href='<?php echo 'delete/'.$user->id; ?>'>Eliminar</a>
               
                 
            </td>
        </tr>
        <?php }?>
    </tbody>
    
</tr>
</table>