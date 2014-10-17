<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
//echo $_FILES['fi']['type'];
$path="filetest/all.png";
$png_header = array(137, 80, 78, 71, 13, 10, 26, 10);
$f = fopen($path, 'r');
for ($i = 0; $i < 8; $i++) {
        // convert current character to its ascii value
        $byte = ord(fread($f, 1));
 
        // return false if it doesn't match png's header
        if ($byte !== $png_header[$i]) {
            fclose($f);
			echo "png";
           // return false;
        }
		else
		{
			echo "not";
		}
    }
?>
</body>
</html>
