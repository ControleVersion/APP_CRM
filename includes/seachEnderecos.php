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
        $nome = (isset($_GET['nome'])) ? addslashes( $_GET['nome'] ) :'';
         
        if($id_espec != '' && is_numeric($id_espec)){
      
            
            /*
                    || LISTANDO OS ENDERECOS
            */
           
            try{
                //====================  reajustando ==================
                if( $nome != ""){
                        $stmt = $conn->query("SELECT * FROM `app_enderecos` WHERE nome_completo like '%".$nome."%' ORDER BY `nome_completo`  ASC;");

                 } else{
                 	 $stmt = $conn->query("SELECT * FROM `app_enderecos`  ORDER BY `nome_completo`  ASC;");
                 
                 }     
                
              
                $executa = $stmt;
                    
                if($executa){
                    $y=0;
                    foreach($executa as $ln){
            
            			echo '<tr>
                        <td scope="row">'.$ln['id'].'</td>
                        <td>'.utf8_encode($ln['nome_completo']).'</td> 
    						<td>'.utf8_encode($ln['endereco']).'</td> 
    						
    						
    						<td>
    							<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal" onclick="listarEndereco('.$ln['id'].');" >
                        			<i class="glyphicon glyphicon-pencil"></i>  
                    			</button>    
                    			<button type="button" onclick="apagar('.$ln['id'].')" class="btn btn-danger btn-xs"> 
                       				<i class="glyphicon glyphicon-trash"></i>  
                    			</button>
    						</td></tr> ';
            		
                    }
                }
                else{
                    echo '\n Erro ao listar os dados';
                }

                    //$stmt->rowCount(); 

            } catch(PDOException $e) {
            echo '\n ERROR: ' . $e->getMessage();
            }
            $conn  = array();
            $stmt = array();
            $executa = array();
        }

