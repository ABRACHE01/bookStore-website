<?php
 global $linkDB;
 //connection to mysql
 $HostName='localhost';
 $user='root';
 $pass='';
 $dbName='bookstore';
 $linkDB=mysqli_connect($HostName,$user,$pass,$dbName);

//  if(mysqli_connect_error()){
//     die('there was an error while connecting to database');
//  }else{
//     echo "succsessfully connected to database";
//  }


?>