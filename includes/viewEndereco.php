<?php
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
                      						
                		$stmt = $conn->prepare("SELECT * FROM `app_enderecos` WHERE `app_enderecos`.`id` = ?;");  
            			$stmt->bindParam(1, $IdEnd, PDO::PARAM_INT);  
   						$executa = $stmt->execute();
   						
   						echo '<table border="0">';
                    	foreach($stmt as $ln){
                     
                        	echo '
    							<tr>
                        			<td><b>Nome:</b> </td> <td>'.utf8_encode($ln['nome_completo']).'</td> 
    							</tr>
    							<tr>
    								<td> <b>Endereço:</b> </td> <td>'.utf8_encode($ln['endereco']).'</td> 
    							</tr>
    							<tr>
    								<td> <b>Referência: </b> </td> <td> '.utf8_encode($ln['referencia']).'</td> 
    							</tr>
    							<tr>
    								<td> <b>Bairro:</b> </td> <td>'.utf8_encode($ln['bairro']).'</td> 
    							</tr>
    							<tr>
    								<td> <b>Status:</b> </td> <td>'.utf8_encode($ln['status']).'</td> 
    							</tr>
    							';
                    	}
                		echo '</table>';
                 
                 	} else{
                 	 	echo 'Erro ao carregar endereço...';
                 
                 	}     
                

            } catch(PDOException $e) {
            	echo '\n ERROR: ' . $e->getMessage();
            }
            //limpar memoria
            $conn  = array();
            $stmt = array();
            $executa = array();
		
		}
