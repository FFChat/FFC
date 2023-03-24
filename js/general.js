
function throwNewMessage(id, message, user) {

  const list = document.getElementById(id)
  const element = document.createElement("li");
  element.classList.add("general-chat");
  element.classList.add("d-flex");
  element.classList.add("border-white");
  element.classList.add("border-top");
  element.classList.add("p-2");
  element.classList.add("mx-3");
  element.innerHTML = '<img src="images/img_util/'+ user +'.gif" id="'+ user +'" width="32" height="32" class="rounded me-2" alt="image utilisateur"> <div> <label for="'+ user +'" class="pb-2 text-white-50">'+ user +'</label><p>'+ message +'</p></div>';

  list.appendChild(element);
}
const srvIP = (location.host.slice(0, -5));

const socket = io("http://"+srvIP+":3000", {
  withCredentials: false,
  extraHeaders: {
    "socket-header": "bonjour"
  }
});

socket.on("connection", (socket) => {
  console.log(socket.id); // x8WIv7-mJelg7on_ALbx
});

function emitmsg() {
  socket.emit("chat message", "world");
}

socket.on("chat message", (arg) => {
  throwNewMessage('message-space', arg, 1)
});