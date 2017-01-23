<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>

<p>
le php
</p>

<?php 

require_once "classes/Message.php";


$message = new Message("farid", microtime(true), "le php ca pue");
echo $message->renderHtml();
?>

