const http = require('http');
const server = http.createServer(app);
const { Server } = require("socket.io");
const io = new Server(server);

function throwNewMessage(id, message, user) {

  const list = document.getElementById(id)
  const element = document.createElement("li");
  element.classList.add("message-chat");
  element.innerHTML = '<p>'+message+'</p>';

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