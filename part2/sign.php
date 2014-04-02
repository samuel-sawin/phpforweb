<head>
  <title>
    Lunch And Learn 4/2/14 - Sign the Guestbook
  </title>
</head>

<body>

  <?php include 'nav.php'; ?>

  <h1>
    Guestbook
  </h1>
  <p>
    Fill out the following form to sign the guestbook.
    <br />
    Your email will be kept confidential. I only use it to send you a thank you eCard!
  </p>

  <form id="form1" name="form1" method="post">
  
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
 
</body>