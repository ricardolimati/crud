<?php
include_once '../model/Conexao.class.php';
include_once '../model/Manager.class.php';
$maneger = new Manager();

?>
<?php include_once '../controller/verifica_login.php'; ?>
<?php include_once 'header.php'; ?>
<div class="container">
	<h2 class="text-center"> LISTA DE CLIENTES <i class="fa fa-users"></i></h2>
	<h5 class="text-right">
		<a href="page_register.php" class="btn btn-primary btn-xs">
			<i class="fa fa-user-plus"></i>
		</a>
	</h5>
	<!-- Iniciando a tabela -->
	<div class="table-responsive">
		<table class="table table-hover">
			<thead class="thead">
				<tr>
					<th>ID</th>
					<th>Cliente</th>
					<th>E-mail</th>
					<th>CPF</th>
					<th>Dt.Nascimento</th>
					<th>Endereço</th>
					<th>Whatsapp</th>
					<th colspan="3">Ações</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($maneger->listClient("registros") as $client) : ?>
					<tr>
						<td><?php echo $client['id'] ?></td>
						<td><?php echo $client['name'] ?></td>
						<td><?php echo $client['email'] ?></td>
						<td><?php echo $client['cpf'] ?></td>
						<td><?php echo date("d/m/Y", strtotime($client['birth'])) ?></td>
						<td><?php echo $client['address'] ?></td>
						<td><?php echo $client['phone'] ?></td>
						<td>
							<form method="POST" action="page_update.php">
								<input type="hidden" name="id" value="<?php echo $client['id'] ?>">
								<button class="btn btn-warning btn-xs">
									<i class="fa fa-user-edit"></i>
								</button>
							</form>
						</td>
						<td>
							<form method="POST" action="controller/delete_cliente.php" onclick="return confirm('Tem certeza que deseja excluir ?');">
								<input type="hidden" name="id" value="<?php echo $client['id'] ?>">
								<button class="btn btn-danger btn-xs">
									<i class="fa fa-trash"></i>
								</button>
							</form>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<!-- Fim da Tabela -->
</div>
<?php include_once 'footer.php'; ?>
