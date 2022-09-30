<?php
$connect=new mysqli('localhost', 'hasanosman', 'edwardcampbell', 'learn_php_crud');

if(!$connect){
    die(mysqli_error($connect));
}



?>