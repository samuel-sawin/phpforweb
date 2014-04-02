<?php
  $host = "localhost";
  $username = "root";
  $password = "mysql";
  $database = "guestbook_app";
  $table = "guestbook";

  mysql_connect("$host", "$username", "$password") or die("cannot connect to server");
  mysql_select_db("$database") or die("cannot select database");

  $name = mysql_real_escape_string($_POST['name']);
  $email = mysql_real_escape_string($_POST['email']);
  $comment = mysql_real_escape_string($_POST['comment']);

  $error = '';
  if (!$name)
  {
    $error = 'Must provide name!';
  }
  else if (!$email)
  {
    $error = 'Must provide email!';
  }
  else if (strpos($email,'@') === false)
  {
    $error = 'Email must be real!';
  }
  else if (!$comment)
  {
    $error = 'Must provide comment!';
  }
  else
  {
    $sql = "INSERT INTO $table (name, email, comment)
            VALUES ('$name', '$email', '$comment')";
    $result = mysql_query($sql) or die(mysql_error());
  }
    
  mysql_close(); //close database connection
?>
<?php if ($error) {
  header("location: sign.php?error=$error");
} else {
  header("location: view.php");
}
