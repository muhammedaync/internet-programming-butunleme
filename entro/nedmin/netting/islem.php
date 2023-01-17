<?php
ob_start();
session_start();

include 'baglan.php';

if (isset($_POST['admingiris'])) {

	$kullanici_mail=$_POST['kullanici_mail'];
	$kullanici_password=($_POST['kullanici_password']);

	$kullanicisor=$db->prepare("SELECT * FROM adminkullanici where kullanici_mail=:mail and kullanici_password=:password");
	$kullanicisor->execute(array(
		'mail' => $kullanici_mail,
		'password' => md5($kullanici_password),
		));

	echo $say=$kullanicisor->rowCount();

	if ($say==1) {
				
		$_SESSION['kullanici_mail']=$kullanici_mail;
		header("Location:../production/index.php");
		exit;



	} else {

		header("Location:../production/login.php?durum=no");
		exit;
	}
	

}




?>