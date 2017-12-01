<form enctype="multipart/form-data" method="post" action="#">
	<input type="file" multiple name="arquivo[]">
	<input type="submit" value="Enviar">
</form>

<?php 

echo "<pre>";
if ("POST" == $_SERVER['REQUEST_METHOD']) {
	foreach ($_FILES['arquivo']['error'] as $index => $error) {
		if (UPLOAD_ERR_OK == $error) {
		var_dump($_FILES['arquivo']);
		$nome = basename($_FILES['arquivo']['name'][$index]);

		$movido = move_uploaded_file($_FILES['arquivo']['tmp_name'][$index], __DIR__ . "{$nome}");

		if ($movido) {
			echo "Movido {$nome}";
		}
	}
	}
	
}