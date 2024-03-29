<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title><?= $nom ?></title>
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendor/fontawsome/css/fontawesome.css" rel="stylesheet">
  <link href="/vendor/fontawsome/css/brands.css" rel="stylesheet">
  <link href="/vendor/fontawsome/css/solid.css" rel="stylesheet">
  <link href="/css/general.css" rel="stylesheet">
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
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
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

    <button class="btn btn-outline-light fa-solid fa-users" type="button" data-bs-toggle="offcanvas"
      data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
    </button>

    <div class="offcanvas offcanvas-end bg-dark text-white" tabindex="-1" id="offcanvasRight"
      aria-labelledby="offcanvasRightLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRightLabel">Online users</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul>
          <li class="d-flex flex-row border-white border-top p-2 mx-3">
            <img src="../images/users/Bloom.png" alt="User 1" width="32px" height="40px">
            Bloom
          </li>
          <li class="d-flex flex-row border-white border-top p-2 mx-3">
            <img src="../images/users/Flora.png" alt="User 2" width="32px" height="40px">
            Flora
          </li>
          <li class="d-flex flex-row border-white border-top p-2 mx-3">
            <img src="../images/users/Stella.png" alt="User 3" width="32px" height="40px">
            Stella
          </li>
          <li class="d-flex flex-row border-white border-top p-2 mx-3">
            <img src="../images/users/Musa.png" alt="User 4" width="32px" height="40px">
            Musa
          </li>
          <li class="d-flex flex-row border-white border-top p-2 mx-3">
            <img src="../images/users/Layla.png" alt="User 5" width="32px" height="40px">
            Layla
          </li>
        </ul>
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
        </ul>
        <hr>
        <div class="dropdown">
          <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
            id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="#" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>UserName</strong>
          </a>
          <ul class="dropup-menu dropdup-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
          </ul>
        </div>

      </nav>

      <main class="col px-0">
        <!-- La page -->