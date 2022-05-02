<?php 
	include_once "header.php"; 
	include "database.php";

	session_start();

	$sql = "SELECT * FROM produtos";

	$resultado = mysqli_query($conexao, $sql);

?>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Sistema de Estoque</h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Adicionar Produto</span></a>
			
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Código</th>
						<th>Nome</th>
						<th>Preço</th>
						<th>Quantidade</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						while($linha = mysqli_fetch_assoc($resultado)){
							echo "<tr>";
							echo "<td>"."000".$linha['id']."</td>";
							echo "<td>".$linha['nome']."</td>";
							echo  "<td>".$linha['preco']."</td>";
							echo  "<td>".$linha['quantidade']."</td>";
							echo   "<td>";
							echo		"<a href='#editEmployeeModal' onclick='setupEditModal(".$linha['id'].',"'.$linha['nome'].'",'.$linha['preco'].','.$linha['quantidade']. ")' class='edit' data-toggle='modal'><i class='material-icons' data-toggle='tooltip' title='Edit'>&#xE254;</i></a>";
							echo		"<a href='deletar-produto.php?produto_id=".$linha['id']."' class='delete'><i class='material-icons' data-toggle='tooltip' title='Deletar'>&#xE872;</i></a>";
							echo	"</td>";
							echo "</tr>";

						}

					?>
				</tbody>
			</table>
			
		</div>
	</div>        
</div>








<?php
	include_once "adicionar-produto-modal.php";
	include_once "editar-produto-modal.php";

	include_once "footer.php";

?>
