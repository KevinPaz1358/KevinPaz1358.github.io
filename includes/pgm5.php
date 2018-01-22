<html>

  <head>

    <!--    **************************************************
    Page Name: pgm5.php
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



    

    <title> Paz,K Pgm4 </title>

    <style>
      body {
         background-image: url("../images/Jarvis.jpg");
      }

    .tooltip 
    {
      position: relative;
      display: inline-block;
			color: #ffffff;

    }

    .tooltip .tooltiptext 
    {
      visibility: hidden;
      width: 120px;
      background-color: red;
      color: #fff;
      text-align: center;
      border-radius: 6px;
      padding: 5px 0;
      position: absolute;
      z-index: 1;
      bottom: 125%;
      left: 50%;
      margin-left: -60px;
      opacity: 0;
      transition: opacity 1s;
    }


    .tooltip .tooltiptext .tooltip-left 
    {
      top: -5px;
      bottom:auto;
      right: 128%;  
    }



    .tooltip .tooltiptext::after 
    {
      content: "";
      position: absolute;
      top: 100%;
      left: 50%;
      margin-left: -5px;
      border-width: 5px;
      border-style: solid;
      border-color: red transparent transparent transparent; /*arrow*/
    }

    .tooltip:hover .tooltiptext 
    {
      visibility: visible;
      opacity: 1;
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
  <form method="POST" action="./ControllerPgm5.php">
  <table align=center width="80%" border="0" ">
    <font color=#ffffff>
    <tbody>
      <tr>

          <strong>Please tell us how we can get in touch with you if we need more information:</strong><br><br>

          </center>
         <table>
          <font color=#ffffff>

          <!--Text Fields-->
          <tr><td width="80"><div class="tooltip">&nbsp;Telephone
          <span class="tooltiptext"><font color="yellow">Please enter your Telephone. This field is REQUIRED</font></span></div>
          </td> <td><input type="text" size="35" maxlength="128" name="Telephone" placeholder="Telephone">  </td></tr>

          <tr><td width="80" ><div class="tooltip">&nbsp;First Name     
          <span class="tooltiptext"><font color="yellow">Please enter your FIRST NAME</font></span></div>
					</td> <td><input type="text" size="35" maxlength="128" name="FirstName" placeholder="First Name"> </td></tr>

          <tr><td width="80" ><div class="tooltip">&nbsp;Last Name     
          <span class="tooltiptext"><font color="yellow">Please enter your LAST NAME</font></span></div>
					</td> <td><input type="text" size="35" maxlength="128" name="LastName" placeholder="Last Name"> </td></tr>

          <tr><td width="80"><div class="tooltip">&nbsp;E-mail    
          <span class="tooltiptext"><font color="yellow">Please enter your EMAIL</font></span></div>					
					</td> <td><input type="text" size="35" maxlength="128" name="Email" placeholder="Email"></td></tr>
          
        
          </font>
       <tr><td>
<br>
        <p><strong><div class="tooltip"> What would you like to report?
        <span class="tooltiptext"><font color="yellow">Please select the type of report you would like to make</font></span></div></strong></p>
</tD><td>
        <!--Radio Buttons-->
        <input type="radio" name="ReportType" value="Bug"><font color=#ffffff>Bug &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

        <!--Default Option--> 
        <input type="radio" checked name="ReportType" value="Feature Request"><font color=#ffffff>Feature Request
</td></tr>
        <br> 
        <br>
<tr><td>
        <!--Checkboxes-->
<br>
        <p><strong><div class="tooltip">Please mark all applicable levels of experience:
        <span class="tooltiptext"><font color="yellow">Please select all types of programming with which you have experience</font></span></div></strong></p>
</td><td>
        <input type="checkbox" name="GoogleAPI" value="GoogleAPI"><font color=#ffffff>Google API
        <input type="checkbox" name="Voice2Text" value="Voice2Text"><font color=#ffffff>Voice to Text API
</td></tr>

<tr><td>
<br>
        <p><strong><div class="tooltip">Enter your bug or feature request in the area below:
        <span class="tooltiptext"><font color="yellow">Please enter specific information about your bug report/feature request in the field provided</font></span></div></strong></p>
</td><td>
        <!--Text Area-->
        <textarea name="Comments" placeholder="Please enter your report here" rows="3" cols="50"></textarea><br><br>
</td></tr>
<tr><td>
<br>
        <p><strong><div class="tooltip">For which platform would you like to make this report for?
        <span class="tooltiptext"><font color="yellow">Please enter which platform this report is for</font></span></div></strong></p>
</td><td>
        <!--Drop Down Box-->
         <select name="Platform" size="1"">
            <option selected value="WebSite">Web Site</option> <!--Default Option-->

            <option value="Mobile">Mobile Device</option>

            <option value="Compuet">Computer</option>

            <option value=SmartHome>Smart Home Device</option>
        </select>

</td></tr></font>
</table>

        <!--Submit Comment Display Area #2-->
          <p><strong><?php echo "" .$message; ?></strong></p>
          <br>

        <!--Submit Buttons-->
             <tr>
               <td style="width: 20%;" align=center> 
                  <input type="submit" name="Find"   value="Find">

                  <input type="submit" name="Save"   value="Save">

                  <input type="submit" name="Modify" value="Modify">

                  <input type="submit" name="Delete" value="Delete">

                  <input type="submit" name="Clear"  value="Clear">

                  <input type="submit" name="Help"   value="Help">

                  <input type="submit" name="About"  value="About">

                  <input type="submit" name="Contact_Me"  value="Contact_Me">

                  <input type="submit" name="Leads"  value="Leads">

                  <input type="submit" name="Email_Me"  value="Email_Me">

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
