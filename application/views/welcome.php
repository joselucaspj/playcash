<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Play Cash</title>

    <!-- Bootstrap -->
    <link href="resources/css/bootstrap.min.css" rel="stylesheet">

    
  </head>
  
  <body>
    <form>
      <div class="container">
      	  <div class="form-group">
		    <label for="nome">Nome*</label>
		    <input type="input" name="nome" class="form-control" id="nome" placeholder="Nome" required>
		  </div>
		  <div class="form-group">
		    <label for="apelido">Apelido</label>
		    <input type="input" name="apelido" class="form-control" id="apelido" placeholder="Apelido">
		  </div>
		 <div class="form-group">
		    <label for="email">Email*</label>
		    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
		  </div>
		  <div class="form-group">
		    <label for="email2">Digite o Email novamente*</label>
		    <input type="email" name="email2" class="form-control" id="email2" placeholder="Digite o Email novamente">
		  </div>
		  <div class="form-group">
		    <label for="senha">Password*</label>
		    <input type="password" name="senha" class="form-control" id="senha" placeholder="Senha">
		  </div>
		 
		  <div class="checkbox">
		    <label>
		      <input type="checkbox"> Declaro que tenho 18 anos, e aceito os termos de licença
		    </label>
		  </div>
		  <button type="submit" class="btn btn-default">Submit</button>
		</div>
</form>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="resources/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="resources/js/bootstrap.min.js"></script>
  </body>
</html>