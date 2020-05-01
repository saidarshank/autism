<?php
	$con = mysqli_connect('127.0.0.1','root','');
	if(!$con)
	{
		echo "Not connected";
	}
	if(!mysqli_select_db($con,'autism'))
	{
		echo "database Not Selected";
	}
	for($i = 1 ; $i <= 22 ; $i++)
	{
		$ans = $_POST[$i];
		$a = array();
		for($j = 0;$j<=8;$j++)
		{
			$a[$j] = ($j+1)==$ans ? 1 : 0;
		}
		$sql = "INSERT INTO outact (ques,Yes,No,C,NA,NE,PP,VP,GP,M) VALUES ('$i','$a[0]','$a[1]','$a[2]','$a[3]','$a[4]','$a[5]','$a[6]','$a[7]','$a[8]')";
		if(!mysqli_query($con,$sql))
		{
			echo 'Not Inserted';
		}
		else
		{
			echo 'Inserted';
		}
	}
	header("refresh:2; url=index.html");
	
?>