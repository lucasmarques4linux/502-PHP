<form enctype="multipart/form-data" method="post" action="#">
	<input type="hidden" name="MAX_FILE_SIZE" value="2097152">
	<input type="file" name="arquivo">
	<input type="submit" value="Enviar">
</form>

<?php 

echo "<pre>";
if ("POST" == $_SERVER['REQUEST_METHOD']) {
	
	if (UPLOAD_ERR_OK == $_FILES['arquivo']['error']) {

		$nome = basename($_FILES['arquivo']['name']);

		$movido = move_uploaded_file($_FILES['arquivo']['tmp_name'], "/{$nome}");

		if ($movido) {
			echo "OK";
		}
	}
}
