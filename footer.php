

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="http://getbootstrap.com/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
    
    <script>
    	//filtrar por nome
    	$('input#filtrar01').keypress(function(){
            $.ajax({
                type: "GET",
                dataType: "html",
                url: "includes/seachEnderecos.php",
                data: {id_espec: 1, nome: $('#filtrar01').val()},
                success: function (data) {
                       $('#listar-enderecos').html(data);
                }
            });
        });
        //filtrar por nome
    	$('button#search').click(function(){
            $.ajax({
                type: "GET",
                dataType: "html",
                url: "includes/seachEnderecos.php",
                data: {id_espec: 1, nome: $('#filtrar01').val()},
                success: function (data) {
                       $('#listar-enderecos').html(data);
                }
            });
        });
        
        function apagar(val){
        

    		if (confirm("Tem certeza que deseja apagar este endereço?") == true) {
        
            	$.ajax({
                	type: "GET",
                	dataType: "html",
                	url: "includes/deleteEnderecos.php",
                	data: {id_espec: 1, id: val},
                	success: function (data) {
                       		alert(data);
                       		//atualizar tabela
                     		$.ajax({
                				type: "GET",
                				dataType: "html",
                				url: "includes/seachEnderecos.php",
                				data: {id_espec: 1, nome:''},
                				success: function (data) {
                       				$('#listar-enderecos').html(data);
                				}
            				});  
                	}
            	});
            }
        }
        
        
        //listando um por um no click
        function listarEndereco(value){
        	$.ajax({
                	type: "GET",
                	dataType: "html",
                	url: "includes/viewEndereco.php",
                	data: {id_espec: 1, id: value},
                	success: function (data) {
                       		$('div.modal-body').html(data);
                	}
            	});
        }
    </script>
    
  </body>
</html>