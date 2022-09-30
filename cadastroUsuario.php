<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
	<h1 class="text-center bg-primary text-white">CADASTRO DE USUÁRIO</h1>
	<br>
		<div class="row">
			<div class="col">
				
			</div>
			<div class="col">
				<form action="#" method="POST">
				  <div class="mb-3">
					<label for="nome" class="form-label">Nome</label>
					<input type="text" class="form-control" id="nome" name="nome">
				  </div>
                  <div class="mb-3">
					<label for="email" class="form-label">Email</label>
					<input type="text" class="form-control" id="email" name="email">
				  </div>
				  <div class="mb-3">
					<label for="login" class="form-label">Login</label>
					<input type="text" class="form-control" id="login" name="login">
				  </div>
				  <div class="mb-3">
					<label for="senha" class="form-label">Senha</label>
					<input type="text" class="form-control" id="senha" name="senha">
				  </div>
				 <div class="text-center">
				  	<input type="submit" class="btn btn-primary" value="Cadastrar">
					<button type="button" class="btn btn-danger" onclick="javascript:location.href ='menu.php';">Voltar</button>
				</div>
				</form>
			</div>
			<div class="col">
				
			</div>
		</div>
	</div>
  </body>
</html>

<?php

	if(!empty($_POST))
	{
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$login = $_POST['login'];
		$senha = $_POST['senha'];
		
		$arquivo = fopen("cadastro/usuarios.txt", "a+")or die("Não foi possivel abrir o arquivo!");
		
		$conteudo = "$nome
		$email
		$login
		$senha
		----------------------------------
		
";

		if(fwrite($arquivo, $conteudo))
		{
			echo "<script>alert('Cadastrado com sucesso');</script>";
			fclose($arquivo);
		}
		else
		{
			echo "<script>alert('Erro ao cadastrar as informações');</script>";
		}
		
		
	}


?>