<?

require_once('../model/general_chat.php');
$id_chanel = 1;
$mod = new general_chat();

$messages = $mod->getMessageUserChanel(1);


function addNewMessage(string $text, int $id_user) {
  global $mod;
  $mod->addNewMessage($text, 1, $id_user);
}

function addMessage() {
  global $mod;

  $user = htmlspecialchars($_POST['user']);
  $chanel = htmlspecialchars($_POST['channel']);
  $msg = htmlspecialchars($_POST['msg']);

  $mod->addNewMessage($msg, $chanel, $user);
  echo(json_encode('ok'));
}
