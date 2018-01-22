<html>

  <head>

    <title>
      Paz K, Email_Me
    </title>

    <!--    **************************************************
    Page Name: Email_Me.php
    Author   : Kevin Paz
    Your URL : ocelot-aul.fiu/~kpaz004
    Course   : CGS 4854 MW 5:00 - 6:15
    Professor: Michael Robinson
    Program  : Program 5
    Purpose  : Retrieve and display information sent using a form.
    Website  : ocelot.aul.fiu.edu/~kpaz004/

    Due Date : 12/4/2017

    I certify that this work is my own alone.


            ..........{ Kevin Paz }..........
    ************************************************** -->
</head>

<body>
  <center>
  <table align=center width="50%" cellpadding=5 cellspacing=3 bgcolor=>
    <tr>
      <td align=center>
        <p style="fontfamily:new time Roman;color:DarkRed;font-size:30px;"> 
	<!--Project Name-->Jarvis Smart Assistant 
        </p> </td> </tr>
  </table>
  <!--Main Menu-->
  <?php include("./mainmenu.php"); ?>

 <table cellpadding="0" cellspacing="0" width="75%" height="366">
  <tr>
   <td width="75%" height="57"  colspan="2"  >

    <br>

    <center>
    <form method="POST" action="./mailer.php">

        <p><strong><font color=#ffffff>What kind of comment would you like to send?</strong></p>

        <input type="radio" name="MessageType" value="Complaint"><font color=#ffffff>Complaint 
        <input type="radio" name="MessageType" value="Problem"><font color=#ffffff>Problem
        <input type="radio" checked name="MessageType" value="Suggestion"><font color=#ffffff>Suggestion
        <br> 
        <p><strong>What about us do you want to comment on?</strong></p>
 
        <select name="drop_down" size="1">
            <option selected>Web Site</option>
            <option>Office/Lab Hours</option>
            <option>Text Books</option>
        </select>

        Other: <input type="text" size="26" maxlength="256" name="SubjectOther">

        <p><strong>Enter your comments in the space provided below:</strong></p>

        <textarea name="Comments" rows="5" cols="42"></textarea><br><br>

        <strong>Tell us how to get in touch with you:</strong><br><br>

        <table>
          <tr><td width="45"><font color=#ffffff>&nbsp;Name     </td> <td><input type="text" size="35" maxlength="256" name="UserName"> </td></tr>
          <tr><td width="45"><font color=#ffffff>&nbsp;E-mail   </td> <td><input type="text" size="35" maxlength="256" name="UserEmail"></td></tr>
          <tr><td width="45"><font color=#ffffff>&nbsp;Telephone</td> <td><input type="text" size="35" maxlength="256" name="UserTel">  </td></tr>
        </table>
    
        <br>
        <input type="checkbox" name="check[]" value="Contact Requested">
                                              Please contact me as soon as possible regarding this matter

        <br><br> 
        <input type="submit" value="Submit" name="Submit"> 
        <input type="reset"  value="Clear Form">
        <br>
    </form>

<!--   </td>
  </tr>
 </table-->
 </center>

   <?php include('./mainmenu.php')?>

</body>

</html>
