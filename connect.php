<?php
$host= "localhost";
$user="root";
$password="";
$database="users";

$connection= mysqli_connect($host, $user, $password,$database);
if(!$connection){

    die("Connection failed");
}

// $createTable = "create Table credentials id int auto_increment primary key not null , username varchar 255 not null, email varchar 255 ,date ,password varchar 255 ";

//createTableProds = "create Table products id int auto_increment, pname varchar 255 not null , pimage varchar 255, price double not null"  =--;
?>