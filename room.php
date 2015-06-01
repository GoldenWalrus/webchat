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
<title>ChatUp : Chat Room</title>
</head>
<body>
<div class="spacedout"></div>
<div class="container">
<div class="jumbotron">
<div class='container'>
<?php
echo "<p>Now chatting as ".$username."&nbsp";
?>
<div class="panel panel-default">
	<div class="panel-heading clearfix">
	<div class="pull-left">
	<h4 id='status' class='offline'>Offline</h4>
	</div>
	<div class="btn-group pull-right">
	<?php echo "<button id='connect' class='btn btn-primary btn-sm' onclick='readyChat(\"".$username."\")'>Connect</button></p>"; ?>
	</div>
	</div>
	<table id='chat-output' class="table"></table>
	<div class="panel-footer clearfix">
	<textarea id="chat-input" class="form-control clearfix" placeholder="Your message here"></textarea>
	<button id="send" class="btn btn-primary btn-small">Send</button>
	</div>
</div>
<p>[<a href="portal.php">Change name</a>]</p>
</div>
</div>
</div>
</body>
