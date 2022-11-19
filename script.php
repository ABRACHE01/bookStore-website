<?php

// //INCLUDE DATABASE FILE
// include('connection.php');

// //SESSSION IS A WAY TO STORE DATA TO BE USED ACROSS MULTIPLE PAGES
 

// // //ROUTING
// if(isset($_POST['save_book']))     saveBook();

//  // if you push the button save 

//  function saveBook(){   
//    // header('location:profileSettings.php');
//     global $linkDB;
//     //CODE HERE

//     //  saving inputs that the user writed in the modal into database by using (1) and (2)

//     //(1) import iput values from modal

//     $title=$_POST['title'];
//     $writer=$_POST['writer'];
//     $type=$_POST['type'];
//     $date=$_POST['date'];
//     $about=$_POST['about'];
//     $price=$_POST['price'];

  

//     // (2) SQL INSERT
     
//     $req="INSERT INTO `books`(  `book_name`, `writer_name`, `book_type`, `book_date`, `about`, `price`) VALUES ('$title','$writer','$type','$date','$about',$price)";

//    mysqli_query($linkDB,$req);
   
//    $_SESSION['message'] = "Book has been added successfully !";
//    header('location: bookmodifs.php');
    

