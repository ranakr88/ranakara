<?php
$gelendosya=$_FILES["cv"]; 

echo "<pre>";
print_r($gelendosya);
echo "</pre>";

echo "Gelen Dosyanın adı:". $gelendosya["name"]. "<br>";
echo "Gelen Dosyanın Mime türü:". $gelendosya["type"]. "<br>";