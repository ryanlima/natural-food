<?php
	require_once('functions.php');
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Cliente <?php echo $msg['id_ms']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome :</dt>
	<dd><?php echo $msg['nome_ms']; ?></dd>

	<dt>Email :</dt>
	<dd><?php echo $msg['email_ms']; ?></dd>


</dl>

<dl class="dl-horizontal">
	<dt>Assunto:</dt>
	<dd><?php echo $msg['assun_ms']; ?></dd>

	<dt>Mensagem: </dt>
	<dd><?php echo $msg['msg_ms']; ?></dd>


</dl>



<div id="actions" class="row">
	<div class="col-md-12">
	  <!--a href="edit.php?id=<?php echo $msg['id']; ?>" class="btn btn-primary">Editar</a-->
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>
