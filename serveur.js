const http = require("http");
const server = http.createServer();

const io = require("socket.io")(server, {
  cors: {
    credentials: false
  }
});


io.on('connection', (socket) => {
  const sid = socket.id;

  console.log(`User connected with socket id ${sid}`);
  io.emit('chat message', `User with socket id ${sid} connected`);
  
  socket.on('disconnect', () => {
    console.log(`User with socket id ${sid} disconnected`);
    io.emit('chat message', `User with socket id ${sid} disconnected`);
  });
  
  io.emit('some event', { someProperty: 'some value', otherProperty: 'other value' });
  
  socket.on('chat message', (msg) => {
      console.log(msg);
      io.emit('chat message', msg);
    });
});

server.listen(3000, () => {
  console.log('listening on *:3000');
});
