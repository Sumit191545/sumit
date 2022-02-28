<?php


$server= 'localhost';
$user = 'root';
$password='';
$db='corona';

$con= mysqli_connect($server, $user, $password, $db);

if($con){
    ?>
    <script>
        alert("Connection successful");
    </script>
    <?php
}else{
    ?>
    <script>
        alert("No connection");
    </script>
    <?php
}
?>