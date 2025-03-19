<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Değişkenler</title>
</head>
<body>
    <h3>Global Değişkenler</h3>
    <h4>$_GET</h4>

    <form action="" method="get">

   <label for="kullanici">Kullanıcı Adı: </label> 
   <input type="text"  name="username" id="kullanici">
   <br> 
   <label for="sifre"> Şifrenizi Giriniz:</label>
   <input type="password" name="password" id="sifre">
   <br>
   <input type="submit" value="Giriş Yap">

    </form>

    <?php 
    $kullanici_adi    =@$_GET["username"];
    $kullanici_sifresi=@$_GET["password"];

    echo "Formdan Kullanıcı Adı:$kullanici_adi <br>";
    echo "Formdan kullanıcı Şifresi:$kullanici_sifresi <br>";

    if($kullanici_adi=="Veli" and $kullanici_sifresi== 1234){
     echo"Kullanıcı adi ve şifresi dogru";
    }


    ?>

</body>
</html>