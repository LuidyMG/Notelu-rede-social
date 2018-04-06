<!DOCTYPE html>
<html>
<head>
	<title>Notelu</title>
	<meta charset="utf-8">
	<meta lang="pt-br">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link href="open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
		<!-Menu->

	<nav class="navbar navbar-light bg-light">
		<div class="container descktop">
		  <a class="navbar-brand" href="#">
		    <img src="img/logo.png"  width="30" height="30"  class="d-inline-block align-top" alt="">
		    Notelu
		  </a>
		  <form action="cadastrar.php" class="form-inline">
		  	<button class="btn btn-outline-warning my-2 my-sm-0 mao" type="submit">Cadastrar</button>
		  </form>
		</div>
	</nav>

		<!-Login->

	<img src="img/backD.png" class="img-fluid descktop-img" alt="Responsive image">
	<div class="container descktop">
	  <div class="row">
	    <div class="col-sm">
	    </div>
	    <div class="col-sm">
	    	<form action="processa/appLogin.php" method="post" class="login">
	    	  <div class="form-group row">
			    <div class="col-sm-10">
			      <h3 class="text-cor centra">Efetue o login</h3>
			    </div>
			  </div>
			  <div class="form-group row">
			    <div class="col-sm-10">
			      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
			    </div>
			  </div>
			  <div class="form-group row">
			    <div class="col-sm-10">
			      <input type="password" class="form-control" id="senha" name="senha" placeholder="Password">
			    </div>
			  </div>
			  <div class="form-group row">
			    <div class="col-sm-10 centra">
			      <input type="submit" class="btn btn-outline-warning cor btnu" id="logar" name="logar" value="Logar">
			      <a href="recuperarSenha.php">Esqueceu a senha ? click aqui.</a>
			    </div>
			  </div>
			</form>
	    </div>
	  </div>
	 </div>

	 	<!-LoginM->
	 	
	  <div class="container mobile">
		  <div class="row justify-content-md-center">
		    <div class="col col-lg-12">
		      <img src="img/backM.png" class="img-fluid" alt="Responsive image">
		    </div>
		    <br />
		    <div class="w-100"></div>
		    <br />
		    <div class="col col-lg-12">
		      <form action="processa/appLogin.php" method="post">
	    	  <div class="form-group row">
			    <div class="col-sm-10">
			      <h3 class="text-cor centra">Efetue o login</h3>
			    </div>
			  </div>
			  <div class="form-group row">
			    <div class="col-sm-10">
			      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
			    </div>
			  </div>
			  <div class="form-group row">
			    <div class="col-sm-10">
			      <input type="password" class="form-control" id="senha" name="senha" placeholder="Password">
			    </div>
			  </div>
			  <div class="form-group row">
			    <div class="col-sm-10 centra">
			      <input type="submit" class="btn btn-outline-warning cor btnu" id="logar" name="logar" value="Logar">
			      <a href="recuperarSenha.php">Esqueceu a senha ? click aqui.</a>
			    </div>
			  </div>
			</form>
		    </div>
		  </div>
	    </div>
</body>
</html>