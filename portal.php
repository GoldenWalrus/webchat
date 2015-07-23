<head>
<?php
include "styles.php";
include "utils.php";
?>
<title>Web Chat</title>
</head>
<body>
<div class="spacedout"></div>
<div class="container">
<div class="jumbotron">
<?php
//include some things like navbar(?) possibly here
?>
<div align='center'>
<h1>Web Chat</h1>
<tr>
<p>Chat online anonymously for free</p>
<form id='getScreenname' method='POST' action="room.php" onsubmit="return validateScreenname();">
<label for='screenname'>
<input name='screenname' id='screenname' placeholder="Screen Name">
<button class="btn btn-default">Start Chatting</button>
</form>
</div>
</div>
</div>
</body>
