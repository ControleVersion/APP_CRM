<?php
header('Content-type: text/html; charset=utf-8');

//forcar mostrar todos os erros
error_reporting(E_ALL | E_STRICT);
//ini_set('display_errors', 1);

	require 'connect.class.php';
	
    
        $nome              = (isset($_POST['nome'])) ? utf8_decode($_POST['nome']) :'';  
        $endereco       = (isset($_POST['endereco'])) ? utf8_decode($_POST['endereco']) : "";
        $referencia        = (isset($_POST['referencia'])) ? utf8_decode($_POST['referencia']) : "";
        $cep             = (isset($_POST['cep'])) ? $_POST['cep'] : "";
        $status                   = (isset($_POST['status'])) ? $_POST['status'] : '';
        $bairro      = (isset($_POST['bairro'])) ? utf8_decode($_POST['bairro']) :'';
        
      
	/*
		|| GRAVANDO OS DADOS EM TABELA DE REGISTRO DE ACESSO
	*/
	try{

            //manter registro de foto caso nao tenha sido escolhido no form
            $stmt = $conn->prepare("INSERT INTO `siswe908_ead_treinamentos`.`app_enderecos` ( `nome_completo`, `endereco`, `referencia`, `cep`, `bairro`, `status`) VALUES ( ?, ?, ?, ?, ?, ?);");
             
            $stmt->bindParam(1, $nome, PDO::PARAM_STR);  
            $stmt->bindParam(2,$endereco , PDO::PARAM_STR); 
            $stmt->bindParam(3,$referencia, PDO::PARAM_STR); 
            $stmt->bindParam(4,$cep , PDO::PARAM_STR);
            $stmt->bindParam(5, $bairro, PDO::PARAM_STR);
            $stmt->bindParam(6,$status, PDO::PARAM_STR);
           
          		
   		$executa = $stmt->execute();
 
            if($executa){
                /*
                echo '<style>.alert-success {
                        color: #3c763d;
                        background-color: #dff0d8;
                        border-color: #d6e9c6;
                        padding: 10px;
                        }   
                    </style>
                    <div class="alert alert-success fade in" style="margin-top:18px; ">
                        <table bordre="0">
                            <tr>
                                <td>
                                    <div syle="float: left;width: 150px;">Dados gravados com sucesso.</div> 
                                </td>
                                <td>
                                <div syle="float: right;width: 150px;">
                                    <a href="../index.php">VOLTAR</a>
                                </div>
                                </td>
                            </tr>
                        </table>
                    </div>';
                    */
                    echo '<script>alert("Novo endereço cadastrado com sucesso!"); window.location.href="../index.php"; </script>';
            }
            else{
                echo '<script>alert("Erro ao inserir os dados"); window.location.href="../index.php";</script>';
            }
   		
  		//$stmt->rowCount(); 
		
	} catch(PDOException $e) {
    	echo '\n ERROR: ' . $e->getMessage();
	}
	
	$conn = array();
	$executa = array();


?>

