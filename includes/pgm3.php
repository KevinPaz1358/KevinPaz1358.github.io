<html>

  <head>

    <!--    **************************************************
    Page Name: pgm3.php
    Author   : Kevin Paz
    Your URL : ocelot-aul.fiu/~kpaz004
    Course   : CGS 4854 MW 5:00 - 6:15
    Professor: Michael Robinson
    Program  : Program 3
    Purpose  : Retrieve and display information sent using a form.
    Website  : ocelot.aul.fiu.edu/~kpaz004/

    Due Date : 10/30/2017

    I certify that this work is my own alone.


            ..........{ Kevin Paz }..........
    ************************************************** -->



    

    <title> Paz,K Pgm3 </title>

    <style>
      body {
         background-image: url("../images/Jarvis.jpg");
      }
    </style>

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
        
      if( strlen(trim($found)) > 0 )
      {  
         //echo "<br>Leave it alone  it means that find.php was already executed  Found = [" . $found . "]";
         //leave it alone it means that find.php was already executed 
      }
      else 
      {
         $found = ""; //set the value of $found to empty
      }

   ?>

  <!--Beginning of Form-->
  <form method="POST" action="./ControllerPgm3.php">
  <table align=center width="80%" border="0" ">
    <font color=#ffffff>
    <tbody>
      <tr>

          <strong>Please tell us how we can get in touch with you if we need more information:</strong><br><br>

          </center>
         <table>
          <font color=#ffffff>

          <!--Text Fields-->
          <tr><td width="80"><font color=#ffffff>&nbsp;Telephone</td> <td><input type="text" size="35" maxlength="128" name="Telephone">  </td></tr>

          <tr><td width="80" ><font color=#ffffff>&nbsp;First Name     </td> <td><input type="text" size="35" maxlength="128" name="FirstName"> </td></tr>

          <tr><td width="80" ><font color=#ffffff>&nbsp;Last Name     </td> <td><input type="text" size="35" maxlength="128" name="LastName"> </td></tr>

          <tr><td width="80"><font color=#ffffff>&nbsp;E-mail    </td> <td><input type="text" size="35" maxlength="128" name="Email"></td></tr>


          </font>
        </table>
          <center>

        <p><strong> What would you like to report?</strong></p>

        <!--Radio Buttons-->
        <input type="radio" name="ReportType" value="Bug">Bug &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

        <!--Default Option--> 
        <input type="radio" checked name="ReportType" value="Feature Request">Feature Request

        <br> 
        <br>

        <!--Checkboxes-->
        <p><strong>Please mark all applicable levels of experience:</strong></p>
        <input type="checkbox" name="GoogleAPI" value="GoogleAPI">Google Assistant API
        <input type="checkbox" name="Voice2Text" value="Voice2Text">Voice to Text API



        <p><strong>Enter your bug or feature request in the area below:</strong></p>

        <!--Text Area-->
        <textarea name="Comments" rows="3" cols="50"></textarea><br><br>


        <p><strong>For which platform would you like to make this report for?</strong></p>
        <!--Drop Down Box-->
         <select name="Platform" size="1"">
            <option selected value="WebSite">Web Site</option> <!--Default Option-->

            <option value="Mobile">Mobile Device</option>

            <option value="Compuet">Computer</option>

            <option value=SmartHome>Smart Home Device</option>
        </select>



        <!--Submit Comment Display Area #2-->
          <p><strong><?php echo "" .$message; ?></strong></p>
          <br>

        <!--Submit Buttons-->
             <tr>
               <td style="width: 15%;"> </td>            
               <td style="width: 20%;" align=center> 
                  <input type="submit" name="Find"   value="Find">

                  <input type="submit" name="Save"   value="Save">

                  <input type="submit" name="Modify" value="Modify">

                  <input type="submit" name="Delete" value="Delete">

                  <input type="submit" name="Clear"  value="Clear">

                  <input type="submit" name="Help"  value="Help">

                  <input type="submit" name="About"  value="About">

                  <input type="submit" name="Contact Us"  value="Contact Us">

                  <input type="submit" name="Leads"  value="Leads">

                  <input type="hidden" name="found"  value="<?php echo $found ?>" >
               </td>
            </tr>

      </tr>    
    </font>
    </tbody>
  </table>
</form>
  
  <!--Main Menu-->
  <?php include("./mainmenu.php"); ?>
</center>
</body>

</html>
