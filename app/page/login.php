<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>Log</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="../public/css/login.css">
  <script src="../public/js/login.js"></script>
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
                  <input type="text" class="form-control form-control-lg" placeholder="Username" />
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="password" class="form-control form-control-lg" placeholder="Password" />
                </div>

                <button class="btn btn-outline-light btn-lg px-5 btn-a" type="submit">Login</button>

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
                  <input type="text" class="form-control form-control-lg" placeholder="Username" required />
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="password" class="form-control form-control-lg" placeholder="Password" />
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="email" class="form-control form-control-lg" placeholder="Email address" />
                </div>

                <button class="btn btn-outline-light btn-lg px-5 btn-a" type="submit">Login</button>

              </div>
              <div>
                <p class="mb-0">You have an account? <a href="#" onclick="switch_etat()"
                    class="text-white-50 fw-bold">Login</a></p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>

<?php
  include_once('../templates/footer.php')
?>