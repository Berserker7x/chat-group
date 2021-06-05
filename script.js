const socket = io('http://localhost:3000')
//const messageContainer=document.querySelector(".card-body msg_card_body");
var messages = document.querySelector('.message-list');
const messageForm=document.getElementById('input-group-text send_btn')
const messageInput=document.getElementById('form-control type_msg')
socket.on('chat-message',data=>{
     writeLine(data)
     //addMessage(data) 
     console.log(data)

})
/*messageForm.addEventListener('click',e=>{
     e.preventDefault()
   
     const message=messageInput.value
  
     socket.emit('send-chat-message',message)
     console.log(message)
     messageInput.value=''
})*/
 // Button/Enter Key
messageForm.addEventListener('click', sendMessage)



// Messenger Functions
function sendMessage(){
   var msg = messageInput.value;
   messageInput.value = '';
   
   socket.emit('send-chat-message',msg)
   console.log(msg)
   writeLine(msg);
}
function addMessage(e){
   var msg = e.data ? JSON.parse(e.data) : e;
   console.log(msg)
   writeLine(`${msg.FROM}: ${msg.MESSAGE}`)
}
function writeLine(text){
   var message = document.createElement('li')
   message.classList.add('message-item', 'item-secondary')
   message.innerHTML = 'Student : ' + text;
   messages.appendChild(message);
   messages.scrollTop = messages.scrollHeight;
}