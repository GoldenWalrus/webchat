function getXMLHttpObject()
{
	if (window.XMLHttpRequest)
	{
		xmlHttp = new XMLHttpRequest(); //good browsers
	}
	else
	{
		xmlHttp = new ActiveXObject("Microsoft.XMLHTTP"); // IE
	}
	return xmlHttp;
}

function readyChat(usr)
{
  // function will be triggered on page load with the username provided from the post data
	var status = document.getElementById("status");
	status.innerHTML = "Online";
	status.setAttribute("class","online");
  var input = document.getElementById("chat-input");
  var output = document.getElementById("chat-output");
  var chatfocus = false;
  input.onfocus = function(ev){chatfocus = true;};
  input.onblur = function(ev){chatfocus = false;};
  //socket.io will need to be included in the scripts
  var socket = io.connect('http://localhost:3002');
  socket.on("connect",function()
  {
    socket.emit("adduser",usr);
  });
  socket.on("chat",function(data)
  {
    //append data.msg to chat with data.usrname
    output.innerHTML += "<p><b>"+data.username+"</b>: "+data.message+"</p>";
  });

  input.onkeydown = function(ev)
  {
    if (ev.keyCode == 13 && chatfocus == true)
    {
      socket.emit("message",{username:usr, message:input.value});
			input.value = "";
    }
  }
}
