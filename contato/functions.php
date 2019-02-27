<?php
require_once('../config.php');
require_once(DBAPI);
$msgs = null;
$msg = null;
/**
 *  Listagem de Clientes
 */
function index() {
	global $msgs;
	$msgs = find_all('msgs');
}

	/**
 *  Cadastro de Clientes
 */
function add() {
  if (!empty($_POST['msg'])) {

    $today =
      date_create('now', new DateTimeZone('America/Sao_Paulo'));
    $msg = $_POST['msg'];
    $msg['modified'] = $msg['created'] = $today->format("Y-m-d H:i:s");

    save('msgs', $msg);
    echo "<script>alert('Mensagem enviada com sucesso');</script>";
    header('location: ../index.html');
  }
}


/**
 *	Atualizacao/Edicao de Cliente
 */
function edit() {
  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['msg'])) {
      $msg = $_POST['msg'];
      $msg['modified'] = $now->format("Y-m-d H:i:s");
      update('msgs', $id, $msg);
      header('location: index.php');
    } else {
      global $msg;
      $msg = find('msgs', $id);
    }
  } else {
    header('location: index.php');
  }
}

/**
 *  Visualização de um Cliente
 */
function view($id = null) {
  global $msg;
  $msg = find_ms('msgs', $id);
}

/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {
  global $msg;
  $msg = remove_ms('msgs', $id);
  header('location: index.php');
}
