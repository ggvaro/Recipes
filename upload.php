<html>
	<head>
		<title> Cargador de Imagenes </title>
		<style><?php include 'stylesheet.css'; ?>
	</style>
	</head>
	<body>
	<div id="wrapper" class="index">
			<p id="back">
				<a href="editor2.html">
					<svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
						<path fill="currentColor" d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z"></path>
					</svg>
				</a>
			</p>
		<section id="toc">
				<h1 id="mainTitle">Cargador de Imagenes</h1>
				<p id="navigation"></p>

		</section>
		<section>
		<?php
          $target_dir = "images/";


		  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

		  $uploadOk = 1;

		  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));



		  // Check if image file is a actual image or fake image

		  if(isset($_POST["Cargar"])) {
  
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  
			if($check !== false) {
    
				echo "El archivo es- " . $check["mime"] . ".";
    
				$uploadOk = 1;
  
			} else {
    
				echo "Esto no es una foto!";
    
				$uploadOk = 0;
  
			}

		}


		// Check if file already exists

		if (file_exists($target_file)) {

			echo "Pero este ya está en la carpeta...";

			$uploadOk = 0;

		}



		// Check file size

		if ($_FILES["fileToUpload"]["size"] > 5000000) {

			echo "Buenoooooo, este archivo es demasiado grande";

			$uploadOk = 0;

		}



		// Allow certain file formats

		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"

		&& $imageFileType != "gif" ) {

			echo "Ups, solo se pueden subir JPG, JPEG, PNG y GIF ";

			$uploadOk = 0;

		}


		// Check if $uploadOk is set to 0 by an error

		if ($uploadOk == 0) {

			echo "uy,uy, esta foto no se cargado.";

			// if everything is ok, try to upload file

		} else {

			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

				echo "  ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " se ha cargado.";

			} else {

				echo "Sonia has roto esto eh...";

			}

		}



 ?>
</section>
	</div>
</body>
</html>

