<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>pass</title>
</head>
<body>
<?php
function mkPass(){
	$CaracteresAceitos='abcdxywzABCDZYWZ0123456789';
	$max=strlen($CaracteresAceitos)-1;
	$password=null;
	for($i=0;$i<8;$i++) {
		$password.=$CaracteresAceitos{mt_rand(0, $max)}; 
	}
	return $password;
}
?>
</body>
</html>