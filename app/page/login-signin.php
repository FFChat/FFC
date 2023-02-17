<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Login</title>
  <link rel="stylesheet" href="css/login.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href="/FFC/app/templates/fontawsome/css/fontawesome.css" rel="stylesheet">
  <link href="/FFC/app/templates/fontawsome/css/brands.css" rel="stylesheet">
  <link href="/FFC/app/templates/fontawsome/css/solid.css" rel="stylesheet">
  <link href="/FFC/app/page/css/general.css" rel="stylesheet">
  <link rel="stylesheet" href="/FFC/app/page/css/login-signin.css">
</head>

<div class="row align-items-center" style="min-height: 85vh">
  <div class="col-sm-3 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body text-center">
        <h5 class="card-title text-white">Log in</h5>
        <form>
          <div class="mb-3">
            <input type="text" name="u" placeholder="Username" required>
          </div>
          <div class="mb-3">
            <input type="password" name="p" placeholder="Password" required="required" />
          </div>
          <div>
            <button type="submit" class="btn btn-primary btn-block btn-large btn-login">Come in</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body text-center">
        <h5 class="card-title text-white">Sign up</h5>
        <form>
          <div class="mb-3">
            <input type="text" name="u" placeholder="Username" required>
          </div>
          <div class="mb-3">
            <input type="password" name="p" placeholder="Password" required="required" />
          </div>
          <div>
            <button type="submit" class="btn btn-primary btn-block btn-large btn-login">Come in</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<?php
  include_once('../templates/footer.php')
?>