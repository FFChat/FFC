<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Untilted</title>
  <link href="/FFC/app/page/css/general.css" rel="stylesheet">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
  <link href="/FFC/app/templates/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/FFC/app/templates/fontawsome/css/fontawesome.css" rel="stylesheet">
  <link href="/FFC/app/templates/fontawsome/css/brands.css" rel="stylesheet">
  <link href="/FFC/app/templates/fontawsome/css/solid.css" rel="stylesheet">
  <link href="/FFC/app/page/css/<?= $page ?>.css" rel="stylesheet">
</head>

<body class="bg-dark text-white">
  <div class="container-fluid">
    <div class="row">

      <nav class="d-none d-md-flex flex-column flex-shrink-0 p-3 text-white col-md-2 sidebar position-sticky">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
          <img src="images/logo.png" alt="logo" width="75" height="70">
          <span class="fs-4">Femme Fatal Chat</span>
        </a>
        <hr>
        <ul id="nav-list" class="nav nav-pills flex-column mb-auto">

          <li class="nav-item">
            <a href="#" class="nav-link custom-nav-link text-white" id="test" aria-current="page">
              <i class="fa-solid fa-house"></i>
              Home
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link custom-nav-link text-white">
              <i class="fa-solid fa-users"></i>
              General
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link custom-nav-link text-white">
              <svg class="bi me-2" width="16" height="16">
                <use xlink:href="#table" />
              </svg>
              Orders
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link custom-nav-link text-white">
              <svg class="bi me-2" width="16" height="16">
                <use xlink:href="#grid" />
              </svg>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link custom-nav-link text-white">
              <svg class="bi me-2" width="16" height="16">
                <use xlink:href="#people-circle" />
              </svg>
              Customers
            </a>
          </li>
        </ul>
        <hr>
        <div class="dropdown">
          <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="#" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>mdo</strong>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
          </ul>
        </div>
      </nav>


      <main class="col px-0">
        <!-- La page -->