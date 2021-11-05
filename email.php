<?php
	if(isset($_POST['submit'])){
		$n =$_POST['name'];
		$e =$_POST['email'];
		$m =$_POST['message'];
		$to="ravindusaluwadana348@gmail";
		$subject="Responce from website";
		$message="I am very thankful to you";
		$headers="From:ravindusaluwadana348@gmail";
			
		if(mail($to,$subject,$message,$headers)){
			echo "Mail sent";
		}else{
			echo "Can not send mail";
		}
	}
?>