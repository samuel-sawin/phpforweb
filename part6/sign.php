<head>
  <title>
    Lunch And Learn 4/2/14 - Sign the Guestbook
  </title>
</head>

<body>

  <?php include 'nav.php'; ?>

  <?php
    $error = $_GET['error'];
    if ($error)
    {
      echo '<span style="font-weight:bold;color:Red;">'.$error.'</span>';
    }
  ?>

  <h1>
    Guestbook
  </h1>
  <p>
    Fill out the following form to sign the guestbook.
    <br />
    Your email will be kept confidential. I only use it to send you a thank you eCard!
  </p>

  <form id="form1" name="form1" method="post" action="addNewEntry.php">
  
    <table id="guestbook">
    
      <tr>
        <td>
          Name
        </td>
        <td>
          <input name="name" type="text" size="40" />
        </td>
      </tr>

      <tr>
        <td>
          Email
        </td>
        <td>
          <input name="email" type="text" size="40" />
        </td>
      </tr>

      <tr>
        <td>
          Comment
        </td>
        <td>
          <textarea name="comment" cols="40" rows="10"></textarea>
        </td>
      </tr>

    </table>
    
    <div id="warning">
      Warning: Say nice things or your comment will get deleted!!
    </div>
    
    <input id="submitButton" type="submit" name="Submit" value="Submit Your Awesome Comment!!" />
    
  </form>
  
  <style type="text/css">

    #warning {
      margin-top:20px;
      font-weight: bold;
      color: Red;
    }

    #submitButton {
      margin-top: 20px;
    }
  
    #guestbook {
      border-collapse: collapse;
      font-family: "Trebuchet MS",Arial,Helvetica,sans-serif;
      margin-top: 10px;
    }
    #guestbook td, #guestbook th {
      border: 1px solid Navy;
      font-size: 1.2em;
      padding: 3px 7px 2px;
    }
    #guestbook th {
      background-color: RoyalBlue;
      color: #FFFFFF;
      font-size: 1.4em;
      padding-bottom: 4px;
      padding-top: 5px;
      text-align: left;
    }
    #guestbook tr.alt td {
      background-color: LightSkyBlue;
      color: #000000;
    }
    
  </style>

</body>
