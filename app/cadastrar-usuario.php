<?php 
    include_once "header.php"; 

?>

	<div class="modal-dialog">
		<div class="modal-content">
			<form action="cadastrar.php" method="POST">
				<div class="modal-header">						
					<h4 class="modal-title">Cadastrar novo usuário</h4>
				</div>
				<div class="modal-body">				
					<div class="form-group">
						<label to="usuario">Usuário</label>
						<input type="email"  id="usuario" name="usuario" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Senha</label>
						<input type="password" id="senha" name="senha" class="form-control" required>
					</div>	
          <div>
            <a href="./login-usuario.php">Já possui um usuário?</a>
          </div>			
				</div>
				<div class="modal-footer d-flex justify-content-start">
					<input type="submit" class="btn btn-success" value="Cadastrar">
				</div>
			</form>
		</div>
	</div>

<?php
	include_once "footer.php";

?>
