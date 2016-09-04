<?php
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	echo '<script> window.location.href="../login.php";</script>';
	header('location: ../login.php');
}
header('Content-type: text/html; charset=utf-8');
//forcar mostrar todos os erros
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);

	require 'connect.class.php';
	
    
        $id_espec              = (isset($_GET['id_espec'])) ? $_GET['id_espec'] :''; 
        $IdEnd = (isset($_GET['id'])) ? addslashes( $_GET['id'] ) :'';
         
        if($id_espec != '' && is_numeric($id_espec)){
      
            
            /*
                    || LISTANDO OS ENDERECOS
            */
           
            try{
                	//====================  reajustando ==================
                	if( $IdEnd != "" && is_numeric($IdEnd)){
                      						
                		$stmt = $conn->prepare("DELETE FROM `app_enderecos` WHERE `app_enderecos`.`id` = ?;");  
            			$stmt->bindParam(1, $IdEnd, PDO::PARAM_INT);  
   						$executa = $stmt->execute();
						
						echo 'Endereço apagado com sucesso!';
                 
                 	} else{
                 	 	echo 'Erro ao apagar endereço...';
                 
                 	}     
                

            } catch(PDOException $e) {
            	echo '\n ERROR: ' . $e->getMessage();
            }
            $conn  = array();
            $stmt = array();
            $executa = array();
		
		}
