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
</div>
</div>
</body>
