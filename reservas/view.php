<?php
	require_once('functions.php');
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Cliente <?php echo $reserva['id_r']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome :</dt>
	<dd><?php echo $reserva['nome_r']; ?></dd>

	<dt>Email :</dt>
	<dd><?php echo $reserva['email_r']; ?></dd>

	<dt>Telefone :</dt>
	<dd><?php echo $reserva['tel_r']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Mesa:</dt>
	<dd><?php echo $reserva['mesa_id_r']; ?></dd>

	<dt>Data:</dt>
	<dd><?php echo $reserva['data_r']; ?></dd>

	<dt>Data de Cadastro:</dt>
	<dd><?php echo $reserva['created']; ?></dd>
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $reserva['id_r']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>
