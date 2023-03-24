<?php

// routes
session_start();

if(!isset($_SESSION['logged'])) {
  require_once('../view/login.php');
  die;
} else {

  if(isset($_GET['page']) || !empty($_GET['page'])) {
    $page = $_GET['page'];
  } else {
    $page = 'home';
  }

}

if(isset($_GET['page']) || !empty($_GET['page'])) {
  $page = $_GET['page'];
} else {
  $page = 'home';
}

switch($page) {
  case 'home':
    loadPage('home');
    break;
  case 'general':
    loadPage('general_chat', 'General');
    break;
  case 'channel':
    loadPage('private_channel');
    break;
  case 'login':
    require_once('../view/login.php');
    break;
}

function loadPage($page = NULL, $nom = 'In progress...') {
  require_once('../controller/general_controller.php');
  require_once('../templates/header.php');
  require_once('../model/'. $page . '.php');
  require_once('../controller/'. $page . '.php');
  require_once('../view/'. $page . '.php');
  require_once('../templates/footer.php');
}