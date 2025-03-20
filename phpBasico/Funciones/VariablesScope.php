<?php

 $edad = "19";
function estudiante(){
    global $edad;
    $edad = 20;
   echo $edad;
}
echo "$edad y ";
estudiante();
?>