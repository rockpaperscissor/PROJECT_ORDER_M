<?php

$con =mysqli_connect("localhost","root","","PROJECT_ORDER_M");
if($con){
    echo "connected successfully!";

}
else{
    die(mysqli_error($con));
}









?>