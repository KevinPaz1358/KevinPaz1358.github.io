<html>

  <head>

    <title>
      Paz K, Controller2
    </title>

    <!--    **************************************************
    Page Name: Controller2.php
    Author   : Kevin Paz
    Your URL : ocelot-aul.fiu/~kpaz004
    Course   : CGS 4854 MW 5:00 - 6:15
    Professor: Michael Robinson
    Program  : PGM 2
    Purpose  : Retrieve and display information sent using a form.

    Due Date : 10/09/2017

    I certify that this work is my own alone.


            ..........{ Kevin Paz }..........
    ************************************************** -->

  <style>
    body {
       background-image: url("../images/Jarvis.jpg");
    }
  </style>

  </head>

  <body>

    <center>
    <font color=#ffffff>
    <?php
       include("./mainmenu.php"); //Display Main Menu
       
       //Retrieve the data input by the user 
       $FirstName    = $_POST['FirstName'];
       $LastName     = $_POST['LastName'];
       $Email        = $_POST['Email'];
       $PhoneNumber  = $_POST['PhoneNumber'];
       $Report       = $_POST['Report'];
       $GoogleAPI    = $_POST['GoogleAPI'];
       $Voice2Text   = $_POST['Voice2Text'];
       $Platform     = $_POST['Platform'];
       $Comments     = $_POST['Comments'];            
 
                      
      
       //Display the data enter by the user
       echo "First Name: ".$FirstName."<br>";  
       echo "Last Name: ".$LastName."<br>";  
       echo "Email: ".$Email."<br>";  
       echo "Phone Number: ".$PhoneNumber."<br><br>";  
       echo "Report Type: ".$Report."<br><br>";

       echo "Platforms which the user has experience with:<br> ";
       if ( $GoogleAPI == "GoogleAPI" )
       {  echo "User indicated they have expereince with the Google Assistant API<br>"; }
       else
       {  echo "User indicated they do not have experience with the Google Assistant API<br>";}

       if ( $Voice2Text == "Voice2Text" )
       {  echo "User indicated they have experience with the Voice to Text API<br>"; }
       else
       {  echo "User indicated they do not have experience with the Voice to Text API<br>"; }

       echo "Platform for the report: ".$Platform."<br><br>";  
       echo "Additional Information: <br>".$Comments."<br>";    
                  
               
       //Display which submit button was pressed by the user                        
       if ( $_POST['Find'] )
       { 
          echo "You pressed the Find Button";
       }
       else if ( $_POST['Save'] )
       { 
          echo "You pressed the Save Button";
       }
       else if ( $_POST['Modify'] )
       {  
          echo "You pressed the Modify Button";
       }
       else if ( $_POST['Delete'] )
       { 
          echo "You pressed the Delete Button";
       }
       else if ( $_POST['Clear'] )
       {
          echo "Not used yet, if you receive this message an ERROR has occured";
       }
       else
       { 
          echo "<br><h1> You pressed an UNKOWN button</h1>";   
       }


        
        
    ?>

    </center>

    </font>
                 
  </body>

</html>
