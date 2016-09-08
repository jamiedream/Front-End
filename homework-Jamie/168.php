<?php
    $a="*<br>";
    $b="*&nbsp&nbsp*<br>";
    $c="***<br>";
    
function ShowOne(){
    $_POST["one"]="";
    for($i=1; $i<=5; $i++){
        $_POST["one"].="*<br>";
    }
    return $_POST["one"];
}


function ShowSix(){
    global $a, $b, $c;
    return $_POST["six"]=$a.$a.$c.$b.$c;
}


function ShowEight(){
     global $b, $c; 
    return $_POST["eight"]=$c.$b.$c.$b.$c;
}
    echo ShowOne().ShowSix().ShowEight();


?>

