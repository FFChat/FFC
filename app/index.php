<?php

// routes

// if(!isset($_SESSION)) {
//   require_once('page/login-signin.php');
//   die;
// }

if(!isset($_GET['page']) || empty($_GET['page'])) {
  require_once('page/home.php');
  die;
}


switch($_GET['page']) {
  case 'home':
    require_once('page/home.php');
  case 'general':
    headerAdd('general_chat');
    require_once('page/general_chat.php');
    footerAdd('general_chat');

}


function headerAdd($page = NULL) {
  require_once('templates/header.php');
}
function footerAdd($page = NULL) {
  require_once('templates/footer.php');
}