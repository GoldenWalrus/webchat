<head>
<?php
if (empty($_POST['screenname']))
{
	//header("location:portal.php");
}
$username = $_POST['screenname'];
include "styles.php";
include "utils.php";
?>
<script src="https://cdn.socket.io/socket.io-1.3.4.js"></script>
<script src="client.js"></script>
<title>ChatUp : Chat Rooms</title>
</head>
<body>
<div class='container'>
<?php
echo "<p>Now chatting as ".$username."&nbsp<button class='btn btn-default' onclick='readyChat(\"".$username."\")'>Connect</button></p>";
?>
<div class="panel panel-default">
	<div class="panel-heading">
		<h4 id='status' class='offline'>Offline</h4>
	</div>
	<div id='chat-output'></div>
	<input id="chat-input" class='form-control' placeholder="Your message here"></input>
</div>
<p><a href="portal.php">Back</a></p>
</div>
</body>
