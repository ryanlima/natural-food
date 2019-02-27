<?php
	require_once('functions.php');
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Mesa <?php echo $mesa['id_m']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Descrição :</dt>
	<dd><?php echo $mesa['desc_m']; ?></dd>

	<dt>Quantidade:</dt>
	<dd><?php echo $mesa['qtd_m']; ?></dd>

	<dt>Disponibilidade</dt>
	<dd><?php echo $mesa['disp']; ?></dd>
</dl>


<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $mesa['id_m']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>
