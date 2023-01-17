<?php
ob_start();
session_start();
require_once '../netting/baglan.php'; 
if (isset($_POST['insertislemi'])) {



$kaydet=$db->prepare("INSERT into kullanicilar set 
    kullanici_adi=:kullanici_adi,
    email=:email,
    parola=:parola
    ");

$insert=$kaydet->execute(array(
	
'kullanici_adi' => $_POST['kullanici_adi'],
'email' => $_POST['email'],
'parola' => $_POST['parola']

));


if ($insert) {
    //echo  "kayıt basarılı";
 Header("Location:bilgiler.php?durum=ok");
 exit;
} else {
    Header("Location:bilgiler.php?durum=no");
    exit;
   //echo  "kayıt basarısız";
}
}



if (isset($_POST['insertislemi1'])) {



    $kaydet=$db->prepare("INSERT into adminkullanici set 
        kullanici_adsoyad=:kullanici_adsoyad,
        kullanici_password=:kullanici_password,
        kullanici_mail=:kullanici_mail
        ");
    
    $insert=$kaydet->execute(array(
        
    'kullanici_adsoyad' => $_POST['kullanici_adsoyad'],
    'kullanici_password' => $_POST['kullanici_password'],
    'kullanici_mail' => $_POST['kullanici_mail']
    
    ));
    
    
    if ($insert) {
        //echo  "kayıt basarılı";
     Header("Location:kullanici.php?durum=ok");
     exit;
    } else {
        Header("Location:kullanici.php?durum=no");
        exit;
       //echo  "kayıt basarısız";
    }
}



if (isset($_POST['updateislemi'])) {

	$bilgiler_id=$_POST['id'];


    $kaydet=$db->prepare("UPDATE kullanicilar set 
        kullanici_adi=:kullanici_adi,
        email=:email,
        parola=:parola
        where id={$_POST['id']}
        ");
    
    $insert=$kaydet->execute(array(
        
    'kullanici_adi' => $_POST['kullanici_adi'],
    'email' => $_POST['email'],
    'parola' => $_POST['parola']
    ));
    
    
    if ($insert) {
        //echo  "kayıt basarılı";
     Header("Location:bilgiler.php?durum=ok&id=$bilgiler_id");
     exit;
    } else {
        Header("Location:bilgiler.php?durum=no&id=$bilgiler_id");
        exit;
       //echo  "kayıt basarısız";
    }
}

if (isset($_POST['updateislemi1'])) {

	$bilgiler_id=$_POST['kullanici_id'];


    $kaydet=$db->prepare("UPDATE adminkullanici set 
        kullanici_adsoyad=:kullanici_adsoyad,
        kullanici_mail=:kullanici_mail
        where kullanici_id={$_POST['kullanici_id']}
        ");
    
    $insert=$kaydet->execute(array(
        
    'kullanici_adsoyad' => $_POST['kullanici_adsoyad'],
    'kullanici_mail' => $_POST['kullanici_mail']
    
    ));
    
    
    if ($insert) {
        //echo  "kayıt basarılı";
     Header("Location:kullanici.php?durum=ok&kullanici_id=$kullanici_id");
     exit;
    } else {
        Header("Location:kullanici.php?durum=no&kullanici_id=$kullanici_id");
        exit;
       //echo  "kayıt basarısız";
    }
}



if (isset($_POST['updateislemi2'])) {

	$bilgiler_id=$_POST['sno'];


    $kaydet=$db->prepare("UPDATE islem set 
        gonderen=:gonderen,
        alıcı=:alıcı,
        yapilanislem=:yapilanislem,
        bakiye=:bakiye
        where sno={$_POST['sno']}
        ");
    
    $insert=$kaydet->execute(array(
        
    'gonderen' => $_POST['gonderen'],
    'alıcı' => $_POST['alıcı'],
    'yapilanislem' => $_POST['yapilanislem'],
    'bakiye' => $_POST['bakiye']
    
    ));
    
    
    if ($insert) {
        //echo  "kayıt basarılı";
     Header("Location:islembilgi.php?durum=ok&sno=$sno");
     exit;
    } else {
        Header("Location:islembilgi.php?durum=no&sno=$sno");
        exit;
       //echo  "kayıt basarısız";
    }
}





if ($_GET['kullanicilarsil']=="ok") {
	

	$sil=$db->prepare("DELETE from kullanicilar where id=:id"); //where komutu kullanmazsak tüm tabloyu siler
	$kontrol=$sil->execute(array(
		'id' => $_GET['id']
	));

	if ($kontrol) {
		
		//echo "kayıt başarılı";

		Header("Location:bilgiler.php?durum=ok");
		exit;

	} else {

		//echo "kayıt başarısız";
		Header("Location:bilgiler.php?durum=no");
		exit;
	}


}


if ($_GET['bilgilerimsil1']=="ok") {
	

	$sil=$db->prepare("DELETE from adminkullanici where kullanici_id=:id"); 
	$kontrol=$sil->execute(array(
		'id' => $_GET['kullanici_id']
	));

	if ($kontrol) {
		
		//echo "kayıt başarılı";

		Header("Location:kullanici.php?durum=ok");
		exit;

	} else {

		//echo "kayıt başarısız";
		Header("Location:kullanici.php?durum=no");
		exit;
	}


}


if ($_GET['bilgilerimsil2']=="ok") {
	

	$sil=$db->prepare("DELETE from islem where sno=:id"); 
	$kontrol=$sil->execute(array(
		'id' => $_GET['sno']
	));

	if ($kontrol) {
		
		//echo "kayıt başarılı";

		Header("Location:islembilgi.php?durum=ok");
		exit;

	} else {

		//echo "kayıt başarısız";
		Header("Location:islembilgi.php?durum=no");
		exit;
	}


}





?>