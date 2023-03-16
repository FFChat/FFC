<?php

if($_POST['page'] && $_POST['function']) {
  $page = $_POST['page'];
  $function = $_POST['function'];
}

require_once('../controller/'. $page . '.php');

// execution de la function
$function();