<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontrol Yapıları</title>
</head>
<body>
    <h3>Kontrol Yapıları</h3>

    <?php 
    if (3 > 5) {
        echo "Koşul Doğru:";

    } else {
         echo "Koşul Yanlış:";
    }


    echo "<h3>Farklı Kullanım örneği</h3>";
    if(3 > 5) :
        echo "Koşul Doğru";

     else:
         echo "Koşul Yanlış";
    endif; 
    
    
    echo "<h3>Fazla Koşul Kullanım örneği</h3>";
     if(3 > 10) {
        echo "Koşul yanlış 3>10.";

    } else if(18>15){
         echo "Koşul Doğru 18>15";
    }else{
        echo "Koşulların Dışıda ";
    }

    echo "<h3> Saat Uygulaması</h3>";
    /* 
    Saat 0-24 arasında ise aşağıdaki işlemleri yapan değilse 
    saat hatalı yazan koşullu ifadeyi yazınız.
    0-6 arasında her saat başı iyi geceler yazar.
    6-9 arası günaydın yazar.
    9-17 arası iyi günler 
    17-22 arası iyi akşamlar
    bunların dışında iyi geceler 
    */
   $saat =12;
   if(0 >= $saat  or $saat<= 24){
    if ($saat >= 0 AND $saat <= 6) {
        if ($saat == 1){
            echo "iyi geceler . saat {$saat}";
        }elseif($saat == 1){
             echo "iyi geceler . saat {$saat}"; 
        }elseif($saat == 2){
             echo "iyi geceler . saat {$saat}"; 
        }elseif($saat == 3){
             echo "iyi geceler . saat {$saat}"; 
        }elseif($saat == 4){
             echo "iyi geceler . saat {$saat}"; 
        }elseif($saat == 5){
             echo "iyi geceler . saat {$saat}"; 
        }elseif($saat == 6){
             echo "iyi geceler . saat {$saat}"; 
        }
  
   }
   elseif($saat > 6 && $saat <=9 )
   {
    echo "günaydın";

   }elseif($saat > 9 && $saat <=17)
   {
    echo "iyi günler";
   }elseif($saat >17 && $saat <=22)
   {
    echo "iyi akşamlar";
   }elseif($saat >22 && $saat <=24)
   {
   echo "İyi geceler";
   }else
   echo "Hatalı";
   }   






    ?>
</body>
</html>