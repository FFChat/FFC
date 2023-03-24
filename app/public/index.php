<?php

// routes
session_start();
<<<<<<< HEAD
 if(!isset($_SESSION['logged'])) {
   require_once('../view/login.php');
   die;
 }
=======
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
>>>>>>> e9e9ce91c76c4854b37ac697f8f882a09c146fc4

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
  case 'login':
    require_once('../view/login.php');
    break;
}

function loadPage($page = NULL, $nom = 'In progress...') {
  require_once('../templates/header.php');
  require_once('../model/'. $page . '.php');
  require_once('../controller/'. $page . '.php');
  require_once('../view/'. $page . '.php');
  require_once('../templates/footer.php');
}