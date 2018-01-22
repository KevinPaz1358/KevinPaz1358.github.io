<html>

<head>

    <!--    **************************************************
    Page Name: contact_me.php
    Author   : Kevin Paz
    Your URL : ocelot-aul.fiu/~kpaz004
    Course   : CGS 4854 MW 5:00 - 6:15
    Professor: Michael Robinson
    Program  : Program 4
    Purpose  : Accept new contact's information and store it 
               in a databse table.
    Website  : ocelot.aul.fiu.edu/~kpaz004/

    Due Date : 11/8/2017

    I certify that this work is my own alone.


            ..........{ Kevin Paz }..........
    ************************************************** -->
  <title>Contact Me></title>
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

  <!--Time Stamp-->
  <?php include("./time.js"); ?>
  <br>
  <br>

  
    <form method="POST" action="ControllerContacts.php">
  <table align=center width="80%" border="0" ">
    <font color=#ffffff>
    <tbody>
      <tr>

         <table>
          <font color=#ffffff>

          <!--Text Fields-->
          <tr><td width="80"><font color=#ffffff>&nbsp;Telephone</td> <td><input type="text" size="35" maxlength="128" name="Telephone">  </td></tr>

          <tr><td width="80" ><font color=#ffffff>&nbsp;First Name     </td> <td><input type="text" size="35" maxlength="128" name="FirstName"> </td></tr>

          <tr><td width="80" ><font color=#ffffff>&nbsp;Last Name     </td> <td><input type="text" size="35" maxlength="128" name="LastName"> </td></tr>

          <tr><td width="80"><font color=#ffffff>&nbsp;E-mail    </td> <td><input type="text" size="35" maxlength="128" name="Email"><br><br></td></tr>
          
<tr><td>

        <p><strong><font color=#ffffff>Comments:</strong></p>
</td><td>
        <!--Text Area-->
        <textarea name="Comments" rows="3" cols="50"></textarea>
</td></tr></table>
        
 <!--Submit Comment Display Area #2-->
          <p><strong><?php echo "" .$message; ?></strong></p>
          <br><br>

        <!--Submit Buttons-->
             <tr>
               <td style="width: 20%;" align=center> 
                 <input type="submit" value="Submit" name="Submit"> 
                 <input type="reset"  value="Clear">
               </td>
            </tr>

      </tr>    
    </font>
    </tbody>
  </table>
</form>
    </form>
 </center>


</body>

