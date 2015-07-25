//globals for rooms
//var rooms = ["Lobby"];
var roomsAvail = [];
var population = [];
for (var i = 0; i < 100; i++)
{
  population[i] = 0;
  roomsAvail.push(i);
}

//set up app
var express = require('express');
var app = express();
var http = require('http').Server(app);
var io = require('socket.io')(http);
app.use(express.static(__dirname+'/'));

//event handler
io.sockets.on("connection",function(socket)
{
  socket.on("adduser",function(usr)
  {
    socket.username = usr;
    socket.room = "Lobby";
    socket.join(socket.room);
    console.log(usr+" has been added to lobby");
    socket.leave(socket.room);
    socket.room = roomsAvail[0];
    socket.join(socket.room);
		console.log(usr+" moved to "+socket.room);
		population[socket.room]++;
    if (population[socket.room] >= 2)
    {
      //
      x = roomsAvail.shift();
      console.log("Overflow in room "+ x);
    }
		socket.emit("chat",{username:"Server", message: "Welcome! You are now connected!"})
  });

  socket.on("message",function(data)
  {
    //
    io.sockets.in(socket.room).emit("chat",{username: data.username, message: data.message});
  });

	socket.on("disconnect",function()
	{
    roomsAvail.push(socket.room);
		io.sockets.in(socket.room).emit("chat",{username:"Server", message: socket.username+" has left."});
		socket.leave(socket.room);
		console.log(socket.username+" has left.");
	})

});

//set listener
http.listen(3002, function() {
  console.log('Chat server now online');
});
