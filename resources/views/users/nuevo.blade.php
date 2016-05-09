<html>

	<form method=post action="save">
		Nombre:<input type="text" name="nombre">
		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		<br>
		<input type="submit" value="Crear Usuario">
	</form>

</html>