<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title><Ders-2></Ders-2></title>
</head>
<body>
<?php
    /* Php versiyon ve detay bilgisini gösterir. */
    // echo phpinfo();

    echo "<h4> Tırnak İşaretleri Arasındaki Farklar </h4>";
    $uni = "Adnan Menderes Üniversitesi";
    echo "Değişken İçeriği: $uni";
    echo "<br>";
    /*Değişken isminin yazdırılması */
    echo "1- Kazandığınız Üniversite:\$uni";
    echo "<br>";
    echo "2- Kazandığınız Üniversite:"  .  '$uni';
    echo "<br>";
    echo "3- Kazandığınız Üniversite: $uni";
    /*Değişken İçeriğinin yazdırılması */
    echo "<br>";
    echo "1- Kazandığınız Üniversite: $uni";
    echo "<br>";
    echo "2- Kazandığınız Üniversite:"  .  $uni;
    echo "<br>";
    echo "3- Kazandığınız Üniversite:"  .  "$uni";
    echo "<br>";
    echo "4- Kazandığınız Üniversite:"  .  "$uni";
    echo "<br>";


    echo "<hr> <h4>Temel Matemetiksel İşlemler</h4>";
    echo "<h5>Toplama İşlemi</h5>";
    $sayi1=10;
    $sayi2=20;
    echo "\$sayi1 + \$sayi2 = "  . ($sayi1  +$sayi2);
    echo "<br>";
    echo "$sayi1 + $sayi2 = "  . ($sayi1 + $sayi2);
    echo "<br>";
    $sonuc = $sayi1 + $sayi2;
    echo "$sayi1 + $sayi2 = $sonuc"; //iki farklı yöntem var 

    echo "<h5>Çıkarma İşlemi</h5>";
    $sayi1=10;
    $sayi2=20;
    echo "\$sayi1 - \$sayi2 = " . ($sayi1 - $sayi2);
    echo "<br>";
    echo "$sayi1 - $sayi2 = " . ($sayi1 - $sayi2);
    echo "<br>";
    $sonuc = $sayi1 - $sayi2;
    echo "$sayi1 - $sayi2 = $sonuc";


    echo "<h5>Çarpma İşlemi</h5>";
    $sayi1 = 10;
    $sayi2 = 20;
    echo "\$sayi1 * \$sayi2 = " . ($sayi1 * $sayi2);
    echo "<br>";
    echo "$sayi1 * $sayi2 = " . ($sayi1 * $sayi2);
    echo "<br>";
    $sonuc = $sayi1 * $sayi2;
    echo "$sayi1 * $sayi2 = $sonuc";


    echo "<h5>Bölme İşlemi</h5>";
    $sayi1 = 10;
    $sayi2 = 20;
    echo "\$sayi1 / \$sayi2 = " . ($sayi1 / $sayi2);
    echo "<br>";
    echo "$sayi1 / $sayi2 = " . ($sayi1 / $sayi2);
    echo "<br>";
    $sonuc = $sayi1 / $sayi2;
    echo "$sayi1 / $sayi2 = $sonuc";

    echo "<h5>Üst Alma İşlemi (pow(x,y))</h5>";
    $x =4;
    $y= "2";
    //$y= (int)"2";//Dönüşüm işlemi
    echo "Değişken Tipi:" . gettype($x) . "<br>";
    echo "Değişken Tipi:" . gettype($y) . "<br>";
    echo "$x<sup>$y</sup>= " . pow($x,$y);
    
    echo "<h5>Karekök Alma İşlemi (sqrt(x))</h5>";
    $x=123;
    $karekok=sqrt($x);
    echo "$x sayısının karekökü: $karekok";


    echo "<h5>Mutlak Değer İşlemi (abs(x))</h5>";
    $x=(-12);
    $mutlak=abs($x);
    echo "|$x| sayısının mutlak değeri: $mutlak";

    echo "<h5>Taban Değişim İşlemi (base_convert(x,taban1,taban2))</h5>";
    echo "27 sayınının 2'lik tabandaki karşılığı: " . base_convert(27, 10, 2);
    echo "<br>";
    $sayi=255;
    $taban=10;
    $yenitaban=2;
    $sonuc=base_convert($sayi,$taban, $yenitaban);
    echo "($sayi)<sub>$taban</sub>=($sonuc)<sub>$yenitaban</sub>";

    echo "<h5>Mod  İşlemi (fmod(x,y))</h5>";
    $x=20;
    $y=4;
    $mod=fmod($x,$y);
    echo "$x mod $y :$mod";

    /*girilen sayının tek mi çift mi olduğunu gösterir */
    $z=71;
    echo "<br> $z sayısı: " . (fmod($z, 2) == 0 ? "Çifttir" : "Tektir");


    echo "<h5>Yuvarlama İşlemleri (round(x,y))</h5>";
    $x=15.313;
    $y=15.385;
    echo "$x bir ondalık basamak yuvarlaması sonucu: " . round($x, 1) ."<br>";
    echo "$y bir ondalık basamak yuvarlaması sonucu: " . round($y, 1) ."<br>";

    echo "$x iki ondalık basamak yuvarlaması sonucu: " . round($x, 2) ."<br>";
    echo "$y iki ondalık basamak yuvarlaması sonucu: " . round($y, 2) ."<br>";

    echo "<h5>Yuvarlama İşlemleri (floor(x))</h5>";
    /*en yakın en küçük tam sayıyı yuvarlar */
    $x=15.913;
    $y=15.213;
    echo "$x Floor yuvarlaması sonucu: " . floor($x) . "<br>";
    echo "$y Floor yuvarlaması sonucu: " . floor($y) . "<br>";

    echo "<h5>Yuvarlama İşlemleri (ceil(x))</h5>";
    /* kendisinden büyük, en küçük sayıya yuvarlar */
    $x=15.913;
    $y=15.213;
    echo "$x Ceil yuvarlama sonucu: " . ceil($x) ."<br>";
    echo "$y Ceil yuvarlama sonucu: " . ceil($y) . "<br>";

    echo "<h5>Rasgele Sayı Üretme İşlemi (rand(x,y))</h5>";
    echo "10-100 arasında rastgele sayı üretildi: " . rand(10,100);

    echo "<br>";
    for ($i =1; $i <= 10; $i++){
        echo "$i. Sayı:" . rand(0, 100) . "<br>";
    }


?>



    <br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>