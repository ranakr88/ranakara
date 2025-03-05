<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dersleri</title>
</head>
<body>
    <h3> Sık Kullanılan Hazır Fonksiyonlar</h3>
    <?php
    echo $metin= " <br> aydin adnan menderes üniversitesi </br>";
    $byazi=strtoupper($metin);//yazıyı büyük harfe dönüştürür.
    $kyazi= strtolower($byazi);//yazıyı küçük harfe dönüştürü.
    $mb_byazi=mb_strtoupper($kyazi);//yazıyı büyük harfe döüştürür
    $mb_kyazi=mb_strtolower($mb_byazi);//yazıyı küçük harfe dönüştürür
    $ilkharf_buyuk_metin=ucfirst($mb_kyazi);//gelen metnin ilk harflerini büyütür
     $ilkharf_buyuk_kelime=ucwords($mb_kyazi);//kelimelerin baş haflerini büyütür

    echo "<br>Karakter Sayısı:" . strlen($metin);
    echo "<br> Metnin Belirli Bir Karakter Sayısı:" . substr($metin,0,20);
    ?>


<h4> UYgulama:</h4>
<p> Lorem metninin ilk 100 karakterini alın devamında bir buton 
    yerleştirerek Adü web sitesine yönlendirin.</p>


<?php
     $lorem = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas voluptas ducimus nemo?
    Quae quisquam voluptatibus alias nesciunt natus, in ratione vero odit animi eos atque consequuntur earum nulla molestias magnam.";

    echo substr($lorem,0,97) ."...";
    echo   '<br><a href="https://www.adu.edu.tr/" target="=_blank"> Devamını Oku </a>';

    ?>
   
</body>
</html>