<?php
require_once('../model/private_channel.php');
$id_channel = $_GET['id'];
$mod = new private_channel();

if(!getAccesChild($id_channel, $_SESSION['id'])) {
  header("Location: ?page=home");
  exit;
}

$messages = $mod->getMessageUserChanel($id_channel);

function addNewMessage(string $text, int $id_user, int $id_channel) {
  global $mod;
  $mod->addNewMessage($text, $id_channel, $id_user);
}

function getAccesChild(int $id_channel, int $id_user) {
  $mod = new private_channel();
  return $mod->getAccesChilds($id_channel, $id_user);
}


