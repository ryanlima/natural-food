<?php
require_once('../config.php');
require_once(DBAPI);
$mesas = null;
$mesa = null;
/**
 *  Listagem de Clientes
 */
function index() {
	global $mesas;
	$mesas = find_all('mesas');
}

	/**
 *  Cadastro de Clientes
 */
function add() {
  if (!empty($_POST['mesa'])) {

    $today =
      date_create('now', new DateTimeZone('America/Fortaleza'));
    $mesa = $_POST['mesa'];
    $mesa['modified'] = $mesa['created'] = $today->format("Y-m-d H:i:s");

    save('mesas', $mesa);
    header('location: index.php');
  }
}


/**
 *	Atualizacao/Edicao de Cliente
 */
function edit() {
  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['mesa'])) {
      $mesa = $_POST['mesa'];
      $mesa['modified'] = $now->format("Y-m-d H:i:s");
      update_m('mesas', $id, $mesa);
      header('location: index.php');
    } else {
      global $mesa;
      $mesa = find_m('mesas', $id);
    }
  } else {
    header('location: index.php');
  }
}

/**
 *  Visualização de um Cliente
 */
function view($id = null) {
  global $mesa;
  $mesa = find_m('mesas', $id);
}

/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {
  global $mesa;
  $mesa = remove_m('mesas', $id);
  header('location: index.php');
}
