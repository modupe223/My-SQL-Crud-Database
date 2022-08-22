<?php

$con=new mysqli('localhost', 'root', '', 'crudoperations');

if(!$con){
    die(mysqli_error($con));
}


?>