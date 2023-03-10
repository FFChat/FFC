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