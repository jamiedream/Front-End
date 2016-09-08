A. 用星號疊出星狀塔
<?php
header("content-type:text/html; charset=utf-8");

for($layer=0; $layer<=5; $layer++){
    for($star=0; $star<$layer; $star++){
        echo "*";
    }
    echo "<br>";
}


?>

