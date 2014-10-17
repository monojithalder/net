<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	$check=mail("9748977481@txt.att.net", "", "Your packaged has arrived!", "From: ME <monojithalder@gmail.com>\r\n");
	if($check)
	{
		echo "Mail send";
	}
?>
</body>
</html>
