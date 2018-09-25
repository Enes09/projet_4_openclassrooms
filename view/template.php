<!DOCTYPE html>
<html>
	<head>
		<title>Blog Jean Forteroche</title>

		<meta charset="utf-8">
	</head>
	<body>

		<header>
			<?= $title ?>
		</header>

		<?= $content ?>

		<footer>


					<input id="button" type="button" name="show" value="Connexion" />


					<script
					  src="https://code.jquery.com/jquery-3.3.1.min.js"
					  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
					  crossorigin="anonymous">
					 </script>

					<script type="text/javascript">

						document.getElementById("button").addEventListener('click', function(){
							document.getElementById("form").style.display = "block";
							document.getElementById("button").style.display = "none";
						})

						$(document).mouseup(function(e) 
						{
						    var container = $("#form");
						    var button = $("#button");

						    if (!container.is(e.target) && container.has(e.target).length === 0) 
						    {
						        container.hide();
						        button.show();
						    }
						});

					</script>

					<form id="form" style="display: none; width: 500px; height: 100px; border: solid; text-align: center;" method="POST" action="index.php?connection=connect">
							<label>
								Login : 
								<input type="text" name="login"/><br/>
							</label>

							<label>
								Mot de passe : 
								<input type="password" name="password"/>
							</label>

							
								Connexion automatique : 
							<label><input type="radio" name="auto" value="oui" id="oui" />Oui</label>
							<label><input type="radio" name="auto" value="non" id="non" />Non</label>
							

							<input type="submit" name="Envoyer" value="Connexion">
					</form>


		</footer>

	</body>
</html>