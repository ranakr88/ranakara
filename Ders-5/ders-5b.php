<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
Çok Boyutlu Diziler:
    <hr>

    <?php
    $degerler = array(
        "Ocak",
        "Şubat",
        "Mart",
        array(
            "Pazartesi",
            "Salı",
            "Çarşamba",
            "Perşembe"
        ),
        "Nisan",
        "Mayıs",
        "Haziran",
        array(
            "Cuma",
            array(
                "sabah",
                "öğle",
                "akşam"
            ),
            "Cumartesi",
            "Pazar"
        )
    );
    echo "<pre>";
    print_r($degerler);
    echo "</pre>";

    echo "1. Boyuttaki Elemana Erişim: " . $degerler[0] . "<br>";
    echo "1. Boyuttaki Elemana Erişim: " . $degerler[2] . "<br>";
    echo "2. Boyuttaki Elemana Erişim: " . $degerler[3][2] . "<br>";
    echo "2. Boyuttaki Elemana Erişim: " . $degerler[7][0] . "<br>";
    echo "3. Boyuttaki Elemana Erişim: " . $degerler[7][1][0] . "<br>";
    echo "3. Boyuttaki Elemana Erişim: " . $degerler[7][1][1] . "<br>";
    echo "3. Boyuttaki Elemana Erişim: " . $degerler[7][1][2] . "<br>";

    ?>

    Çok Boyutlu Karmaşık Dizi Örneği:
    <hr>

    <?php
    $market = array(
        "naz" => "NAZ",
        "NazSubeler" => array(
            "İstanbul",
            "Malatya",
            "Hatay",
            "ilce" => array(
                "Antakya",
                "semt1" => array(
                    "Antakya" => array(1, 2, 3, 4),
                    "Çekmece" => array(1, 2, 3, 4)
                ),
                "Defne",
                "semt2" => array(
                    "uzuncarsi",
                    "Karaçay"
                )
            )
        ),
        "ezgi" => "Ezgi",
        "EzgiSubeler" => array(
            "İstanbul",
            "Malatya",
            "Hatay",
            "ilce" => array(
                "Antakya",
                "Samandağ"
            )
        ),
        "Duygu" => "Duygu",
        "DuyguSubeler" => array(
            "İstabul",
            "Malatya",
            "Hatay",
            "ilce" => array(
                "Antakya",
                "Samandağ"
            )
        )
    );

    echo "<pre>";
    print_r($market);
    echo "</pre>";

    echo $market["NazSubeler"]["ilce"]["semt1"]["Antakya"][3];

    ?>


</body>
</html>