<?php
$isim=$_POST['isim'];
$soyad=$_POST['soyad'];
$mail=$_POST['mail'];
$yorum=$_POST['yorum'];
$ziyaret=$_POST['ziyaret'];

$emailadresi="tflnforum@gmail.com"; 
$emailkonusu="Site iletisim Formu"; 
//bos alanlari kontrol ediyoruz..
if (empty($isim) or empty($soyad) or empty($mail) or empty($yorum)){ 
    print ('Lütfen bütün alanlari eksiksiz olarak doldurunuz TFLN Ekibi. <br>'); 
    print('<a href="TFLN.html">Ana Sayfaya Geri Dön</a>'); 
    }
    else {
        $emailicerigi="
        isim: $isim
        Soyad: $soyad
        E-Mail: $mail
        Yorum: $yorum
        Ziyaret: $ziyaret";
        if(mail($emailadresi,$emailkonusu,$emailicerigi)){
        print ('E Mailiniz TFLN Ekibine İletilmiştir Bize Ulaştığınız İçin Teşekkür Ederiz <a href="http://www.adresiniz.com">Anasayfaya Geri Dön</a>'); 
        }
        }
?>
<title>Bize Ulaştığınız İçin Teşekkür Ederiz<title>