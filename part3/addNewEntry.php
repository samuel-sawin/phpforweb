<?php
  $host = "localhost";
  $username = "root";
  $password = "mysql";
  $database = "guestbook_app";
  $table = "guestbook";

  mysql_connect("$host", "$username", "$password") or die("cannot connect to server");
  mysql_select_db("$database") or die("cannot select database");

  $name = $_POST['name'];
  $email = $_POST['email'];
  $comment = $_POST['comment'];

  $sql = "INSERT INTO $table (name, email, comment)
          VALUES ('$name', '$email', '$comment')";
  $result = mysql_query($sql) or die(mysql_error());
    
  mysql_close(); //close database connection
  
  header("location: view.php");
?>