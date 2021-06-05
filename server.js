const io = require("socket.io")(3000, {
    cors: {
      origin: "*",
    },
  });
 //instance of my sql
 var mysql=require("mysql");
 var connection=mysql.createConnection(
   {
    "host":"localhost",
    "user":"root",
    "password":"",
    "database":"messages"
   
 });
 //connect bdd
 connection.connect(function(error)
 {

 });


io.on('connection',socket=>{
    console.log('new user')
    //socket.emit('chat-message','hello server')
    socket.on('send-chat-message',message=>{
       socket.broadcast.emit('chat-message',message);
       //save messages in data base
       connection.query("INSERT INTO webmessages (message) VALUES ('" +message+"')",function(error,result) {
           
       });
         
       
    });
})