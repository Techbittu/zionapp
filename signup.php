<?php
  
     include 'conn.php';
     
     $name  = $_POST['name'];
     $emailid = $_POST['emailid'];
     $password = $_POST['password'];
     $contact = $_POST['contact'];
     $college = $_POST['college'];
     $gender = $_POST['gender'];


     $connect->query("INSERT INTO user (name,emailid,password,contact,college,gender) VALUES('".$name."','".$emailid."' ,'".$password."','".$contact."','".$college."','".$gender."')")
     
?>