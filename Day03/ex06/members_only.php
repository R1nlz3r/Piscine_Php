<?php
	header("Authentication Required");
	header('Content-type: text');
	if ($_SERVER['PHP_AUTH_USER'] !== "zaz"
		|| $_SERVER['PHP_AUTH_PW'] !== "jaimelespetitsponeys")
		return (NULL);
?>
<html><body>
Bonjour Zaz<br />
<img src='data:image/png;base64,<?php echo base64_encode(file_get_contents("../img/42.png"))?>'>
</body></html>
