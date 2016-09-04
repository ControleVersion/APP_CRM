<?php require('header.php');?> 
   

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        
        <p>Sistema de controle de endereços.</p>
        <button type="button" onclick="javascript:window.location.href='inserir-novo.php'" class="btn btn-primary btn-lg"><i class="glyphicon glyphicon-plus-sign"></i>  Adicionar Novo</button>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
    	<div class="table-responsive" data-example-id="hoverable-table"> 
    		<table class="table table-hover"> 
    			<thead> 
    				<tr> 
    					<th>#</th> 
    					<th>Nome Completo</th> 
    					<th>Endereço</th> 
    					
    					<th>Ações</th>	 
    				</tr> 
    			</thead> 
    			<tbody id="listar-enderecos"> 
    			    					 
    	
    	<?php
	        require 'includes/connect.class.php';
            //error_reporting(E_ALL | E_STRICT);
            //ini_set('display_errors', 1);
            
    		 try {
    	         $stmt = $conn->query("SELECT * FROM `app_enderecos` ORDER BY `nome_completo`  ASC;");

                    foreach($stmt as $ln){
                     
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
                    
                } catch (Exception $ex) {
            		return "Nada Encontado para listar...";
        		}
     
        ?>
    			
    			</tbody> 
    		</table> 
    	</div>

      <hr>

      <footer>
        <p>&copy; 2016 Company, Inc.</p>
      </footer>
    </div> <!-- /container -->
	
	
	<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Endereço Selecionado</h4>
        </div>
        <div class="modal-body">
          <p> </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
      
    </div>
  </div>
	

<?php require('footer.php'); ?>
