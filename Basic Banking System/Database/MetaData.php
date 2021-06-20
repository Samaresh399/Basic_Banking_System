<?php 
    
    $Hostname='localhost';
    $Username='root';
    $Password='';
    $Database='basic_banking_data';
    $Table1='customers';
    $Table2='transfers';
    $conn = mysqli_connect($Hostname, $Username, $Password, $Database) or die('Connection Failed');

?>