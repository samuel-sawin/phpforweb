<head>
  <title>
    Lunch And Learn 4/2/14 - View the Guestbook
  </title>
</head>

<body>

  <?php include 'nav.php'; ?>

  <h1>
    Guestbook
  </h1>
  <p>
    Here is my awesome guestbook. Isn't it awesome??
  </p>

  <table id="guestbook">
    <tr>
      <th width="100">
        Name
      </th>
      <th width="500">
        Comment
      </th>
      <th width="200">
        Created At
      </th>
    </tr>
    
    
    <?php
      $host = "localhost";
      $username = "root";
      $password = "mysql";
      $database = "guestbook_app";
      $table = "guestbook";

      mysql_connect("$host", "$username", "$password") or die("cannot connect to server");
      mysql_select_db("$database") or die("cannot select database");

      $sql = "SELECT * FROM $table";
      $result = mysql_query($sql);

      $altRow = false;
      $rowClass = '';
      while ($row = mysql_fetch_array($result))
      {    
        if ($altRow)
          $rowClass = 'alt';
        else
          $rowClass = '';
          
        $altRow = !$altRow;
        
        $timestamp = strtotime($row['created_at']);
        $nicelyFormattedDate = date('Y-m-d h:i A', $timestamp);

    ?>
      <tr class="<?php echo $rowClass; ?>">
        <td>
          <?php echo $row['name']; ?>
        </td>
        <td>
          <?php echo $row['comment']; ?>
        </td>
        <td>
          <?php echo $nicelyFormattedDate; ?>
        </td>
      </tr>
    <?php

      }
      
      mysql_close(); //close database connection
    ?>
    
  </table>

</body>