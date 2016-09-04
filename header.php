<?php  
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	echo '<script> window.location.href="login.php";</script>';
	header('location: login.php');
}

$logado = $_SESSION['login'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Endereços CRM</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="http://getbootstrap.com/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/jumbotron/jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="http://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">CRM</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
      			<li class="active"><a href="#">Inicio</a></li>
      			<li class="dropdown">
      				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Cadastrar <span class="caret"></span></a>
        			<ul class="dropdown-menu">
          				<li><a href="inserir-novo.php">Novo Endereço</a></li>
        			</ul>
      			</li>
    		</ul>
    		<ul class="nav navbar-nav navbar-right">
      			<?php if(isset($logado)){?>
      			<li><a href="includes/logout.php"><span class="glyphicon glyphicon-user"></span> Sair</a></li>
      			<?php } else{ ?>
      			<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    			<?php } ?>
    		</ul>
          
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" name="filtrar01" id="filtrar01" placeholder="Pesquisar" class="form-control">
            </div>
            
            <button type="button" id="search" class="btn btn-warning">
                 <i class="glyphicon glyphicon-search"></i> 
            </button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
    