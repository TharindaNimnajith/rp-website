<?php
	if(isset($_POST['submit'])){
		$n =$_POST['name'];
		$e =$_POST['email'];
		$m =$_POST['message'];
		$to="englishbuddy.ai@gmail";
		$subject="Response from website";
		$message="Thank you";
		$headers="From:englishbuddy.ai@gmail";
		if(mail($to,$subject,$message,$headers)){
			echo "Mail sent";
		} else {
			echo "Can not send mail";
		}
	}
?>
