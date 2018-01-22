<html>

<head>

    <!--    **************************************************
    Page Name: leads.php
    Author   : Kevin Paz
    Your URL : ocelot-aul.fiu/~kpaz004
    Course   : CGS 4854 MW 5:00 - 6:15
    Professor: Michael Robinson
    Program  : Program 4
    Purpose  : Display and allow navigation of Contacts
    Website  : ocelot.aul.fiu.edu/~kpaz004/

    Due Date : 11/8/2017

    I certify that this work is my own alone.


            ..........{ Kevin Paz }..........
    ************************************************** -->
  <title>Leads></title>
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

   <?php 
        
      if( strlen(trim($Telephone)) > 0 )
      {  
         //echo "<br>Leave it alone  it means that find.php was already executed  Found = [" . $found . "]";
         //leave it alone it means that find.php was already executed 
      }
      else 
      {
         $found = ""; //set the value of $found to empty
      }
    ?>
  
    <form method="POST" action="ControllerLeads.php">
  <table align=center width="80%" border="0" ">
    <font color=#ffffff>
    <tbody>
      <tr>

         <table>
          <font color=#ffffff>

          <!--Text Fields-->
          <tr><td width="80"><font color=#ffffff>&nbsp;Telephone</td> <td> <p><font color=#ffffff><strong><?php echo "" .$Telephone; ?></strong></font></p> </td></tr>

          <tr><td width="80" ><font color=#ffffff>&nbsp;First Name     </td> <td> <p><font color=#ffffff><strong><?php echo "" .$FirstName; ?></strong></font></p> </td></tr>

          <tr><td width="80" ><font color=#ffffff>&nbsp;Last Name     </td> <td> <p><font color=#ffffff><strong><?php echo "" .$LastName; ?></strong></font></p> </td></tr>

          <tr><td width="80"><font color=#ffffff>&nbsp;E-mail    </td> <td> <p><font color=#ffffff><strong><?php echo "" .$Email; ?></strong></font></p></td></tr>
          

<tr><td>
        <!--Text Area-->
        <p><strong><font color=#ffffff>Comments:</strong></p>
</td><td>
         <p><font color=#ffffff><strong><?php echo "" .$Comments; ?></strong></font></p>

</td></tr></table>
        
 <!--Submit Comment Display Area #2-->
          <p><strong><?php echo "" .$message; ?></strong></p>
          <br><br>

        <!--Submit Buttons-->
             <tr>
               <td style="width: 20%;" align=center> 
                 <input type="submit" value="First" name="First"> 
                 <input type="submit" value="Next" name="Next"> 
                 <input type="submit" value="Previous" name="Previous"> 
                 <input type="submit" value="Last" name="Last"> 
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

