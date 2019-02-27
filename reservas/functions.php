<?php
require_once('../config.php');
require_once(DBAPI);
$reservas = null;
$reserva = null;
/**
 *  Listagem de Clientes
 */
function index() {
	global $reservas;
	$reservas = find_all('reservas');
}

	/**
 *  Cadastro de Clientes
 */
function add() {
  if (!empty($_POST['reserva'])) {

    $today =
      date_create('now', new DateTimeZone('America/Sao_Paulo'));
    $reserva = $_POST['reserva'];
    $reserva['modified'] = $reserva['created'] = $today->format("Y-m-d H:i:s");

    save('reservas', $reserva);
    header('location: ../reserva.php');
  }
}


/**
 *	Atualizacao/Edicao de Cliente
 */
function edit() {
  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['reserva'])) {
      $reserva = $_POST['reserva'];
      $reserva['modified'] = $now->format("Y-m-d H:i:s");
      update('reservas', $id, $reserva);
      header('location: index.php');
    } else {
      global $reserva;
      $reserva = find('reservas', $id);
    }
  } else {
    header('location: index.php');
  }
}

/**
 *  Visualização de um Cliente
 */
function view($id = null) {
  global $reserva;
  $reserva = find_r('reservas', $id);
}

/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {
  global $reserva;
  $reserva = remove_r('reservas', $id);
  header('location: index.php');
}
