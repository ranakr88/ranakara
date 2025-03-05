<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dersleri</title>
</head>
<body>
    <!--html acıklama satırı-->

    <?php 
    /* çoklu satır için kullanılır*/
    // tek satır açıklama

    //phpinfo();

    echo "Aydın Adnan Menderes Üniversitesi MYO";
    //php içinde html etiketleri kullanılabir.
    echo "<br>Aydın Adnan Menderes Üniversitesi <br>MYO";

    //bir değişken tanımlama ve değişkeni ekrana  yazdırma.
    $metin="<br>Aydın Adnan Menderes Üniversitesi MYO ";
    echo $metin;

    // degişken içerisindeki metinsel ifadenin büyük küçük harf dönüşümleri.
    //echo  strtoupper($metin);
     echo $bharf= strtoupper($metin);
     echo $kharf= strtolower($bharf);

     echo $bharf2= mb_strtoupper($metin);
     echo $kharf2=mb_strtolower($bharf2);






    ?>
</body>
</html>