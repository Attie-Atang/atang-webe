<?php

if(isset($_GET['id'])){
  $id=$_GET['id'];
  include("connection.php");

  $sql = "DELETE FROM cvtable WHERE id=$id";
  $result=mysqli_query($conn,$sql);

  if($result){
    session_start();
    $_SESSION["delete"] = "CV deleted successful";

    header('Location: homepage.php');
  }
  else{
    echo "failed to delete";
  }
}


?>
