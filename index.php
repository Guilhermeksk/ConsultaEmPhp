<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<script src="js/jquery.min.js">	</script>
		<script>
			$(document).ready(function() {
				$('#exampleModal').modal('show');
			});
		</script>
  </head>
  <body>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SISTEMA WEB 1.0</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST">
	  <div class="modal-body">
			<div class="mb-3 row">
				<label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="staticEmail" name="email">
				</div>
			  </div>
			  <div class="mb-3 row">
				<label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
				<div class="col-sm-10">
				  <input type="password" class="form-control" id="inputPassword" name="senha">
				</div>
			  </div>
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Sair</button>
        <button type="submit" class="btn btn-primary">Entrar</button>
      </div>
	  </form>
    </div>
  </div>
</div>
  </body>
</html>
<?php

	if(!empty($_POST))
	{
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		
		if(($email == "Admin")&&($senha == "Admin"))
		{
			header('Location:menu.php');
		}
		else
		{
			echo "<script>alert('Email ou senha incorreto');</script>";
		}
	}
?>