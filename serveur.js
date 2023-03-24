const { channel } = require("diagnostics_channel");
const http = require("http");
const server = http.createServer();

const io = require("socket.io")(server, {
  cors: {
    credentials: false
  }
});



io.on('connection', (socket) => {
  const sid = socket.id;
  var nickname = '';
  const userId = socket.handshake.query.id
  // console.log(`User connected with socket id ${sid}`);
  // console.log(`${socket.handshake.query.id} connected`);
  
  option = {
    id: userId
  }
  fetchSimple('getUserInformation',option, 'login').then((response) => {
    console.log(response.nickname + ' is connected');
    nickname = response.nickname
    io.emit('connectionToClient', nickname);
  });

  socket.on('disconnect', () => {
    console.log(`User with socket id ${sid} disconnected`);
    io.emit('disconnectToClient', `User with socket id ${sid} disconnected`);
  });

  socket.on('chat message', (msg, channel) => {
      console.log(msg);
      io.emit('chat message', msg, nickname, userId);
      
      const arg = {
        user: userId,
        channel: channel,
        msg: msg
      }
      fetchSimple('addMessage', arg, 'general_chat')
    });
});

server.listen(3000, () => {
  console.log('listening on *:3000');
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

    fetch('http://localhost:8080/api.php', options)
      .then( response => response.json() )
      .then( response => {
        resolve(response);
      });
  })
}
