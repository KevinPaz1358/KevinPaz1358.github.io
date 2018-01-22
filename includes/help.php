<html>
<head>
    <!--    **************************************************
    Page Name: help.php
    Author   : Kevin Paz
    Your URL : ocelot-aul.fiu/~kpaz004
    Course   : CGS 4854 MW 5:00 - 6:15
    Professor: Michael Robinson
    Program  : Program 4
    Purpose  : Display information about the different buttons on Pgm4
    Website  : ocelot.aul.fiu.edu/~kpaz004/

    Due Date : 11/8/2017

    I certify that this work is my own alone.


            ..........{ Kevin Paz }..........
    ************************************************** -->
  <title>Help</title>
</head>
<body>

<script>

help();

function help()
{
   // Open a new window at a specific location
   var myWindow = window.open("", "Help","width=500, height=600, scrollbars=yes,resizable=yes, left=870, top=50"); 
     	
   
   // Display the purpose of each button on the form in the newly opened window
   myWindow.document.write("<h2>Buttons Purpose:\n</h2>");
     
   myWindow.document.write("<p>\n- <b>FIND.</b> <br>Used to find a specific record to be able to see what information is stored for each phone number, as well as to be able to modify or delete a record.</p>");
   
   myWindow.document.write("<p>\n- <b>SAVE.</b><br>Used to save a record to the database to complete a bug report or feature request.</p>");
   
   myWindow.document.write("<p>\n- <b>MODIFY.</b><br>Used to modify the data that exists in the database for a specific bug report or feature request.</p>");
   
   myWindow.document.write("<p>\n- <b>DELETE.</b><br>After having found the record that you want to delete, this button is used to confirm the deletion of the record.</p>");
   
   myWindow.document.write("<p>\n- <b>CLEAR.</b><br>Used to clear the values input into the form thus far.</p>");

   myWindow.document.write("<p>\n- <b>HELP.</b><br>Uesd to find additional help as to what each button does.</p>");

   myWindow.document.write("<p>\n- <b>ABOUT.</b><br>Uesd to find additional information about the Jarvis Smart Assistant.</p>");

   myWindow.document.write("<p>\n- <b>CONTACT ME.</b><br>Uesd to request additional information for any issues that may have been encountered while using the Jarvis Smart Assistant.</p>");

   myWindow.document.write("<p>\n- <b>LEADS.</b><br>Uesd to navigate the contact request records.</p>");

}


</script>


</body>
</head>
</html>

