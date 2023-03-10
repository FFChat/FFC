<?php

// routes

// if(!isset($_SESSION)) {
//   require_once('page/login-signin.php');
//   die;
// }

if(!isset($_GET['page']) || empty($_GET['page'])) {
  require_once('../page/home.php');
  die;
}


switch($_GET['page']) {
  case 'home':
    loadPage('home');
    break;
  case 'general':
    loadPage('general_chat', 'General');
    break;
  case 'login':
    loadPage('login', 'Login');
    break;
}

function loadPage($page = NULL, $nom = 'Unamed') {
  include('../templates/header.php');
  include('../model/'. $page . '.php');
  include('../controller/'. $page . '.php');
  include('../page/'. $page . '.php');
  include('../templates/footer.php');
}