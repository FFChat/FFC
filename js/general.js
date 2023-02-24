const http = require('http');
const server = http.createServer(app);
const { Server } = require("socket.io");
const io = new Server(server);

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

io.on('connection', (socket) => {
  const sid = socket.id;
  
console.log(`User connected with socket id ${sid}`);
socket.on('disconnect', () => {
    console.log(`User with socket id ${sid} disconnected`);
});


io.emit('some event', { someProperty: 'some value', otherProperty: 'other value' });

socket.on('chat message', (msg) => {
    io.emit('chat message', msg);
  });
});

server.listen(3000, () => {
    console.log('listening on *:3000');
  });