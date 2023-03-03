<?

$id_chanel = 1;
$mod = new general_chat();

$messages = $mod->getMessageUserChanel(1);


function addNewMessage(string $text, int $id_user) {
  global $mod;
  $mod->addNewMessage($text, 1, $id_user);
}

