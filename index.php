<!doctype html>
<html profile="http://www.w3.org/2005/10/profile">
	<head>
		<title>Recetario</title>

		<!-- basics -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
		<link rel="icon" type="image/png" href="http://www.jeffreythompson.org/graphics/favicon.png">

		<!-- font and styles -->
		<link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,400i,700,700i,900" rel="stylesheet"> 
		<link href="stylesheet.css" rel="stylesheet" type="text/css">

		<!-- jquery -->
		<!-- loads the recipes and adds the selected one below -->
		<script
			src="https://code.jquery.com/jquery-3.3.1.min.js"
			integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			crossorigin="anonymous">
		</script>
	</head>

	<body>
		<div id="wrapper" class="index">
		    <p id="edit">
				<a href="editor2.html">
				<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg>
				</a>
			</p>
			<!-- table of contents -->
			<section id="toc">
				<h1 id="mainTitle">Recetario</h1>
				<p id="navigation"></p>

				<ul> <!-- your recipes will go here --> </ul>
			</section>
			
			<!-- footer -->
			<section id="footer">
				<ul>
					<li>A super minimal recipe website by <a href="http://www.jeffreythompson.org">Jeff Thompson</a></li>
					<li><a href="https://github.com/jeffThompson/Recipes">Source code
					
					<!-- external link icon -->
					<!-- via: https://fontawesome.com/icons/external-link-alt -->
					<svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
						<path fill="currentColor" d="M432,320H400a16,16,0,0,0-16,16V448H64V128H208a16,16,0,0,0,16-16V80a16,16,0,0,0-16-16H48A48,48,0,0,0,0,112V464a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V336A16,16,0,0,0,432,320ZM488,0h-128c-21.37,0-32.05,25.91-17,41l35.73,35.73L135,320.37a24,24,0,0,0,0,34L157.67,377a24,24,0,0,0,34,0L435.28,133.32,471,169c15,15,41,4.5,41-17V24A24,24,0,0,0,488,0Z"></path>
					</svg>
					</a></li>
				</ul>
			</section>
		</div>
	</body>

	<!-- combo php/js to get all recipes in the folder -->
	<script>
		<?php $files = array_map('basename', glob('recipes/*.md')); ?>
  	let files = <?php echo json_encode($files) ?>;
	</script>
	
	<!-- javascript does the rest :) -->
	<script src="utils.js"></script>
	<script src="list-recipes.js"></script>
</html>
