<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>Log</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendor/fontawsome/css/fontawesome.css" rel="stylesheet">
  <link href="/vendor/fontawsome/css/brands.css" rel="stylesheet">
  <link href="/vendor/fontawsome/css/solid.css" rel="stylesheet">
  <link href="/css/login.css" rel="stylesheet">
</head>

<body>
  <section id="login">
    <div class="container py-5 h-90">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white card-a" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <div class="mb-md-1 mt-md-4 pb-5">

                <h2 class="fw-bold mb-5 text-uppercase">Login</h2>

                <div class="form-outline form-white mb-4">
                  <input type="text" class="form-control form-control-lg" id="in_name" placeholder="Username" />
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="password" class="form-control form-control-lg" id="in_mdp" placeholder="Password" />
                </div>

                <button class="btn btn-outline-light btn-lg px-5 btn-a" onclick="compteLogin()" type="submit">Login</button>

              </div>
              <div>
                <p class="mb-0">Don't have an account? <a href="#" onclick="switch_etat()"
                    class="text-white-50 fw-bold">Sign Up</a>
                </p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="sign_up" hidden>
    <div class="container py-5 h-90">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white card-a" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <div class="mb-md-1 mt-md-4 pb-5">

                <h2 class="fw-bold mb-5 text-uppercase">Sign Up</h2>

                <div class="form-outline form-white mb-4">
                  <input type="text" id="up_name" class="form-control form-control-lg" placeholder="Username" required />
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="password" id="up_mdp" class="form-control form-control-lg" placeholder="Password" />
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="email" id="up_email" class="form-control form-control-lg" placeholder="Email address" />
                  <!-- <input type="file" name="img" id="img"> -->
                </div>

                <button class="btn btn-outline-light btn-lg px-5 btn-a" onclick="compteCreate()" type="submit">Login</button>

              </div>
              <div>
                <p class="mb-0">You have an account? <a href="#" onclick="switch_etat()" class="text-white-50 fw-bold">Login</a></p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

<div class="position-fixed top-0 end-0">
  <div id="notif_success" class="m-3 position-relative top-0 end-0 toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="toast-body" id="text-notif-success">
      </div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
</div>

<div class="position-fixed top-0 end-0">
  <div id="notif_danger" class="m-3 position-relative top-0 end-0 toast align-items-center text-bg-danger border-0" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="toast-body" id="text-notif-danger">
      </div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
</div>

<script src="js/login.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script> -->
<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>

</html>