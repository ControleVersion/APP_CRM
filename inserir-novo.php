<?php require 'header.php'; ?>


<div class="container">
  <h2>Adicionar Novo</h2>
  <form  action="includes/insertEndereco.php" enctype="multipart/form-data"  method="post">
    <div class="form-group">
      <label for="email">Nome:</label>
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
    </div>
    <div class="form-group">
      <label for="pwd">Endereço:</label>
      <input type="text" class="form-control" name="endereco" id="endereco" placeholder="">
    </div>
    <div class="form-group">
      <label for="ref">Referencia (Bloco, Andar...):</label>
    	<textarea class="form-control" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="cep">CEP:</label>
      <input type="text" class="form-control" name="cep" id="cep" placeholder="">
    </div>
    
    <div class="form-group">
      <label for="cep">Bairro:</label>
      <input type="text" class="form-control" name="bairro" id="bairro" placeholder="">
    </div>
    
    <div class="form-group">
      <label for="cep">Status do endereço (Válido ou Inválido):</label>
      <select class="form-control" name="status" id="status">
  			<option value="Sim">Sim</option>
  			<option value="Não">Não</option>
		</select>
    </div>
    
    <button type="submit" class="btn btn-success">Gravar</button>
  </form>


 <hr>

      <footer>
        <p>&copy; 2016 Company, Inc.</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="http://getbootstrap.com/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
