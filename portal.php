<head>
<?php
include "styles.php";
include "utils.php";
?>
<title>ChatUp: Chat Online</title>
</head>
<body>
<?php
//include some things like navbar(?) possibly here
?>
<div align='center'>
<h1>ChatUp</h1>
<tr>
<p>Chat online anonymously for free</p>
<form id='getScreenname' method='POST' action="room.php">
<label for='screenname'>
<input name='screenname' id='screenname'>
<button class="btn btn-default">Chat</button>
</form>
</div>
</body>
