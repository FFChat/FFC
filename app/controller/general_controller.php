<?php
require_once('../model/general_controller.php');


function getAllUser() {
  $model = new general_controller();
  return $model->getAllUsers();
}

function getAllUserApi() {
  $model = new general_controller();
  echo(json_encode($model->getAllUsers()));
}

function getAccessibleChanel($id) {
  $model = new general_controller();
  $return = [];
  $parents = $model->getAccessibleChanels($id);
  foreach($parents as $parent) {
    $return[$parent['name']] = $model->getChild($parent['id']);
  }
  return $return;
}