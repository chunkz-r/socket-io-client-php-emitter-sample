var port = 3005;
const io = require('socket.io')(port);


io.on('connection', function(socket){ 
  console.log(socket.id + ' has connected');

  socket.on('chat-message', function(data){  	
    io.emit('chat-message', data);
  });
});