<?php
  require_once('functions.php');
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Cliente</h2>

<form action="edit.php?id=<?php echo $mesa['id_m']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Descrição</label>
      <input type="text" class="form-control" name="mesa['desc_m']" value="<?php echo $mesa['desc_m']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Quantidade</label>
      <input type="text" class="form-control" name="mesa['qtd_m']" value="<?php echo $mesa['qtd_m']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Disponibilidade</label>
      <label class="radio-inline">
        <input type="radio" value="ATIVA" name="mesa['disp']">ATIVA</label>
      <label class="radio-inline">
        <input type="radio" value="INATIVA" name="mesa['disp']">INATIVA</label>
    </div>
  </div>

  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>
