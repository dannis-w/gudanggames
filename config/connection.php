<?php
$connect = new mysqli('localhost','root','','gudanggames');
if($connect->connect_error){
echo "Terjadi Kesalahan";
}
?>