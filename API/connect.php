<?php
$conn=mysqli_connect('localhost', 'root','','webtest_nadiiaboichuk');
if (!$conn){
    die("Conection failed: ". mysqli_connect_error());
}
?>