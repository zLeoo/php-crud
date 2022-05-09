<?php 
	include_once "header.php"; 
	include "database.php";

	$sql = "SELECT * FROM produtos_estoque";

	$resultado = mysqli_query($conexao, $sql);

	session_start();

	if (isset($_SESSION['logado'])) {
		
		$logado = $_SESSION['logado'];
	
		if ($logado = false) {
			$_SESSION['mensagem'] = "Login e/ou senha inválido!";
			header('Location: login-usuario.php');
		}

	}else{
		$_SESSION['mensagem'] = "Você deve logar antes de acessar o estoque.";
		header('Location: login-usuario.php');
	}

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
					<?php while($linha = mysqli_fetch_assoc($resultado)):?>
							<tr>
								<td><?php echo "000".$linha['id']?></td>
								<td><?php echo $linha['nome']?></td>
								<td><?php echo $linha['preco']?></td>
								<td><?php echo $linha['quantidade']?></td>
								<td>
									<a href='#editEmployeeModal' onclick='setupEditModal(<?php echo $linha['id'] ?>,"<?php echo $linha['nome'] ?>",<?php echo $linha['preco'] ?>,<?php echo $linha['quantidade'] ?>)' class='edit' data-toggle='modal'><i class='material-icons' data-toggle='tooltip' title='Edit'>&#xE254;</i></a>
									<a href='deletar-produto.php?produto_id=<?php echo $linha['id']?>' class='delete'><i class='material-icons' data-toggle='tooltip' title='Deletar'>&#xE872;</i></a>
								</td>
							</tr>
					<?php endwhile; ?>
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
