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
echo "<p>Now chatting as ".$username."</p>";
?>
<div align="center">
<div id='chat-output'></div>
<textarea id="chat-input"></textarea>
<p><a href="portal.php">Back</a></p>
<?php
echo "<button onclick='readyChat(\"".$username."\")'>Connect</button>";
?>
</div>
</div>
</body>
