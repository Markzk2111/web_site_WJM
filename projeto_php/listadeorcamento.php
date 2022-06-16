<?php 

    include_once "header3.php";

    include_once "database.php";

    $sql = "SELECT * FROM marcus_wjm_produtos";

    $result  = mysqli_query($conexao, $sql);

?>

<body>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Tabela De <b>Orçamentos</b></h2>
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
                        <th>
						<th>Código do Produto</th>
                        <th>Quantidade</th>
                        <th>Endereço</th>
                        <th>Complemento</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                        <th>CEP</th>
					</tr>
				</thead>
				<tbody>
                <?php while($dados = mysqli_fetch_array($result)){?> 
					<tr>
						<td>							
						<td><?php echo $dados['cod']; ?></td>
                            <td><?php echo $dados['qtd']; ?></td>
                            <td><?php echo $dados['endereco']; ?></td>
                            <td><?php echo $dados['complemento']; ?></td>
                            <td><?php echo $dados['cidade']; ?></td>
                            <td><?php echo $dados['estado']; ?></td>
                            <td><?php echo $dados['cep']; ?></td>
						</td>
                        <?php } ?>
                            
					</tr>
               
                </tbody>
            </table>
            <div class="clearfix">
				<div class="hint-text">Orçamento <b>de</b> Tijolos <b>- WJM</b> Tijolos Artesanais</div>
				
			</div>
		</div>
	</div>        
</div>
</body>
            <script src="js/tableorc.js"></script>                 
</html>      
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php include_once "footer.php"; ?>