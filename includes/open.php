<?php 
// session_start inicia a sessão
session_start();

error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);
// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['login'];
$senha = $_POST['senha'];
$userArray =array();

unset ($_SESSION['login']);
unset ($_SESSION['senha']);

// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.
require 'connect.class.php';



			/*
                    || COMPARANDO OS DADOS DIGITADOS
            */
           
            try{
                	//====================  reajustando ==================
                	if( isset($senha) &&  isset($login) && $login != ""){
                      						
                		$stmt = $conn->prepare("SELECT * FROM `app_users` WHERE NOME =? AND SENHA=?;");  
            			$stmt->bindParam(1, $login, PDO::PARAM_STR);
            			$stmt->bindParam(2, $senha, PDO::PARAM_STR); 
   						$executa = $stmt->execute();
   						
   						
                    	foreach($stmt as $ln){
                     		$userArray = $ln;
                    	}
                		
                 
                 	} else{
                 	 	echo 'Login inválido';
                 
                 	}     
                

            } catch(PDOException $e) {
            	echo '\n ERROR: ' . $e->getMessage();
            }
         


	/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do resultado ele redirecionará para a pagina site.php ou retornara  para a pagina do formulário inicial para que se possa tentar novamente realizar o login */
	if(count($userArray) > 0 ){
		$_SESSION['login'] = $login;
		$_SESSION['senha'] = $senha;
		   //limpar memoria
            $conn  = array();
            $stmt = array();
            $executa = array();
        echo '<script> window.location.href="../index.php";</script>';
		header('location: "../index.php"');
	} else{
		unset ($_SESSION['login']);
		unset ($_SESSION['senha']);
		   //limpar memoria
            $conn  = array();
            $stmt = array();
            $executa = array();
		echo '<script> window.location.href="../login.php";</script>';
	
	}
	