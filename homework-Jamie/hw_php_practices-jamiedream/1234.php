B. 利用1,2,3,4這四個數字，可組出多少個數字互不相同三位數?
<br>
<?php

header("content-type:text/html; charset=utf-8");
//將i,j,k指定為1~4,且互為不同數字組合
for($i=1; $i<=4; $i++){
    for($j=1; $j<=4; $j++){
        for($k=1; $k<=4; $k++){
            if($i!=$j && $i!=$k){
                if($j!=$k){
                echo $i.$j.$k."<br>"; 
                $countNumber++;//迴圈每跑一次數字加一
                }
            }
        }
    }
    echo "<hr>";
}

echo "<hr>";
echo "總共"."$countNumber"."組組合";


    
?>

