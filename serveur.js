const express = require('express');
const app = express();
const http = require('http');
const server = http.createServer(app);
const { Server } = require("socket.io");
const io = new Server(server);

app.get('/', (req, res) => {
  res.sendFile(__dirname + '/web/index.html');
});

io.on('connection', (socket) => {
  const sid = socket.id;
  console.log(`User connected with socket id ${sid}`);
  socket.on('disconnect', () => {
    console.log(`User with socket id ${sid} disconnected`);
  });
});

server.listen(3000, () => {
  console.log('listening on *:3000');
});