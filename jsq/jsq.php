<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<title>欢迎</title>
<link rel="stylesheet" type="text/css" href="jsq.css">
</head>

<body>

<?php
	$max_len=8;
	$CounterFile="counter.dat";
	if(!file_exists($CounterFile)) {
		$counter=0;
		$cf=fopen($CounterFile,"w");
		fputs($cf,"0");
		fclose($cf);
	}
	else{
		$cf = fopen($CounterFile,"r");
		$counter = trim(fgets($cf,$max_len));
		
		fclose($cf);
	}
	
	$counter++;
	$cf = fopen($CounterFile,"w");
	fputs($cf,$counter);
	fclose($cf);
	
?>
<div id="dd" align="center">
欢迎您！<br/>
第<?php echo $counter;?>位访客
</div>


</body>
</html>
