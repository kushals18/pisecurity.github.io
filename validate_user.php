<?php
	
	
	

		$uname=$_POST["emailid"];
	$password=$_POST['password'];

	if($uname == "Kushal@gmail.com" && $password == "kushal")
	{
		header('Location: https://drive.google.com/open?id=1FlXlm4IYgOE9ulzPVmBDZ6kBW1J_pwN_');
	}

	header('Location: https://drive.google.com/open?id=1FlXlm4IYgOE9ulzPVmBDZ6kBW1J_pwN_');

?>
