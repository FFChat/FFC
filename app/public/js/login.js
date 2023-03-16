function switch_etat() {
  let login = document.getElementById("login");
  let sign_up = document.getElementById("sign_up");

  if (login.hidden) {
    login.hidden = false;
    sign_up.hidden = true;
  } else {
    login.hidden = true;
    sign_up.hidden = false;
  }
}

function compteCreate() {

  // récpuération data :
  const arg = {
    name: document.getElementById("up_name").value,
    mdp: document.getElementById("up_mdp").value,
    email: document.getElementById("up_email").value
  }

  fetchSimple('compteCreate', arg)
}

function compteLogin() {

  // récpuération data :
  const name = document.getElementById("in_name").value;
  const mdp = document.getElementById("in_mdp").value;
  const arg = {
    name: document.getElementById("in_name").value,
    mdp: document.getElementById("in_mdp").value
  }
  fetchSimple('compteLogin', arg).then((response) => {
    if (response == 1) {
      location.replace("?page=home")

    }
  });
}

function notif_success(text) {
  const notif = document.getElementById('notif_success')
  document.getElementById("text-notif-success").innerHTML = text;
  const toast = new bootstrap.Toast(notif)
  toast.show()
}

function notif_danger(text) {
  const notif = document.getElementById('notif_danger')
  document.getElementById("text-notif-danger").innerHTML = text;
  const toast = new bootstrap.Toast(notif)
  toast.show()
}

function fetchSimple(funcontToExecute, arg, page = 'login') {
  return new Promise((resolve, reject) => {

    const params = {
      page: page,
      function: funcontToExecute,
      ...arg
    };
    const options = {
        method: 'POST',
        body: new URLSearchParams(params),
        headers: {
          'Content-Type' : 'application/x-www-form-urlencoded'
        }
    };

    fetch('api.php', options)
      .then( response => response.json() )
      .then( response => {
        if(response.success == 1) {
          notif_success(response.msg)
          resolve(1);
        } else {
          notif_danger(response.msg)
          resolve(0);
        }
      });
  })
}