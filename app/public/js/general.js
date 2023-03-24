
function throwNewMessage(id, message, nickname, userId) {

  const list = document.getElementById(id)
  const element = document.createElement("li");
  element.classList.add("general-chat");
  element.classList.add("d-flex");
  element.classList.add("border-white");
  element.classList.add("border-top");
  element.classList.add("p-2");
  element.classList.add("mx-3");
  element.innerHTML = '<img src="images/img_util/'+ userId +'.png" id="'+ userId +'" width="32" height="32" class="rounded me-2" alt="image utilisateur"> <div> <label for="'+ userId +'" class="pb-2 text-white-50">'+ nickname +'</label><p>'+ message +'</p></div>';

  list.appendChild(element);
}
const srvIP = (location.host.slice(0, -5));

const socket = io("http://"+srvIP+":3000", {
  withCredentials: false,
  query: {
    id: userId
  }
});

socket.on("connectionToClient", (socketInfo) => {
  console.log(socketInfo.id); // x8WIv7-mJelg7on_ALbx
});

socket.on("disconnectToClients", (socket) => {
  console.log(socket.id); // x8WIv7-mJelg7on_ALbx
});

function emitMsg() {
  socket.emit("chat message", document.getElementById("chat-text-input-id").value, 1 );

  var input = document.getElementById("chat-text-input-id");
  input.value = "";
}

const form = document.querySelector('form');
form.addEventListener('submit', (event) => {
  event.preventDefault();
});


socket.on("chat message", (msg, nickname, id) => {
  throwNewMessage('message-space', msg, nickname, id)
});

function fetchSimple(funcontToExecute, arg, page) {
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
          console.log(response.msg)
          resolve(1);
        } else {
          console.log(response.msg)
          resolve(0);
        }
      });
  })
}
