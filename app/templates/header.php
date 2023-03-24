<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title><?= $nom ?></title>
  <link href="/css/general.css" rel="stylesheet">
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendor/fontawsome/css/fontawesome.css" rel="stylesheet">
  <link href="/vendor/fontawsome/css/brands.css" rel="stylesheet">
  <link href="/vendor/fontawsome/css/solid.css" rel="stylesheet">
  <link href="/css/<?= $page ?>.css" rel="stylesheet">
</head>

<body class="bg-dark text-white">

  <!-- Button Trigger Modal -->
  <div class="position-absolute top-0 end-0 nav-color p-1 utilities">
    <button type="button" class="btn btn-outline-light fa-solid fa-plus" data-bs-toggle="modal"
      data-bs-target="#chanel-create">
    </button>

    <!-- Modal New channel-->
    <div class="modal fade text-white" id="chanel-create" tabindex="-1" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content bg-dark">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">New channel</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <label for="new-channel-name">Name</label>
            <div class="form-outline form-white mb-4">
              <input type="text" class="form-control form-control-lg" placeholder="Name" />
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-dark text-white btn-create">Create the
              channel</button>
            <button type="button" class="btn btn-outline-dark text-white btn-Close"
              data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Button Trigger Modal -->
    <button type="button" class="btn btn-outline-light fa-solid fa-users" data-bs-toggle="modal"
      data-bs-target="#personn-create">
    </button>

    <!-- Modal Nombre Personne Presente-->
    <div class="modal fade text-white" id="personn-create" tabindex="-1" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content bg-dark">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Users</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <label for="new-channel-name">Name</label>
            <div class="form-outline form-white mb-4">
              <input type="text" class="form-control form-control-lg" placeholder="Name" />
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-dark text-white btn-Close"
              data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">

      <nav class="d-none d-md-flex nav-color flex-column flex-shrink-0 p-3 text-white col-md-2 sidebar position-sticky">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
          <img src="images/logo.png" alt="logo" width="75" height="70">
          <span class="fs-4">Femme Fatal Chat</span>
        </a>
        <hr>
        <ul id="nav-list" class="nav nav-pills flex-column mb-auto">

          <li class="nav-item">
            <a href="#" class="nav-link custom-nav-link text-white" id="test" aria-current="page">
              <i class="fa-solid naving fa-house"></i>
              Home
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=general" class="nav-link custom-nav-link text-white">
              <i class="fa-solid naving fa-user-group"></i>
              General
            </a>
          </li>
          <?php $acces = getAccessibleChanel($_SESSION['id']); if(!empty($acces)): foreach($acces as $key => $i): ?>
            <li class="nav-item">
              <?php foreach($i as $y): ?>
                <h5><?=$key?></h5>
            <a href="?page=channel&id=<?= $y['id'] ?>"  class="nav-link custom-nav-link text-white">
              <svg class="bi me-2" width="16" height="16">
                <use xlink:href="#table" />
              </svg>
              <?= $y['name'] ?>
            </a>
            <?php endforeach; ?>
          </li>
          <?php endforeach; endif; ?>
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
            <i class="fa-solid naving fa-clothes-hanger"></i>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link custom-nav-link text-white">
            <i class="fa-solid naving fa-palette"></i>
              Customers
            </a>
          </li>
        </ul>
        <hr>
        <div class="dropdown">
          <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
            id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
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