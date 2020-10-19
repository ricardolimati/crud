<?php include_once 'view/header.php'; ?>
<?php $_SESSION["ID"] = NULL;?>
<div class="container">
	<div class="row">
		<div class="col-4 pt-5 pb-5 offset-4 mb-5 mt-5" style="box-shadow: -5px 13px 48px -6px rgba(0,0,0,0.75);">
			<form action="controller/login.php" method="POST">
				<?php
				if (@$_GET['msg']) {
				?>
					<div class="alert alert-danger" role="alert">
						<?= $_GET['msg'] ?>
					</div>
				<?php
				}
				?>
				<div class="form-group">
					<label for="exampleInputEmail1">Login</label>
					<input type="text" class="form-control" name="login" aria-describedby="emailHelp" placeholder="Enter email" required>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Senha</label>
					<input type="password" class="form-control" name="senha" placeholder="Password" required>
				</div>
				<button type="submit" class="btn btn-primary">ENTRAR</button>
			</form>
		</div>
	</div>
</div>
<?php include_once 'view/footer.php'; ?>