<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$subject=$_POST['subject'];
		$message=$_POST['message'];

		$to='chris.mike.jaringan@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$message;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Data User Brhasil Dibuat! Terima Kasih"." ".$name.", Pembuatan User akan dilakukan Secepatnya!</h1>";
		}
		else{
			echo "Ada Kesalahan Penginputan Data!";
		}
	}
?>