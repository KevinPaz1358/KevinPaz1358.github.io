<html>
  <head>
  <title>save.php</title>

    <!--    **************************************************
    Page Name: save.php
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
  </head>
  <body>
     
    <!-- this is save.php -->
       
     
    <?php
      /*
          echo $Telephone."<br>"; 
          echo $FirstName."<br>";  
          echo $LastName."<br>";  
          echo $Email."<br>";  
          echo $ReportType."<br>";  
          echo $GoogleAPI."<br>";  
          echo $Voice2Text."<br>";  
          echo $Comments."<br>";  
          echo $Platform."<br>";  
      */
                
       $Telephone=trim($Telephone);
       if(strlen($Telephone)>0)           
       {   
          $sql="INSERT INTO UserReport (
                  Telephone,
                  FirstName,
                  LastName,
                  Email,
                  ReportType,
                  GoogleAPI,
                  Voice2Text,
                  Comments,
                  Platform
               )
               VALUES
               (            
                  '$Telephone',
                  '$FirstName',
                  '$LastName',
                  '$Email',
                  '$ReportType',
                  '$GoogleAPI',
                  '$Voice2Text',
                  '$Comments',
                  '$Platform'                   
               )";
                
                  
          if (mysqli_query($connection, $sql)) 
          {
             //echo "<br>New record created successfully";
             $message ="<span style=\"color: red;\">RECORD $found ADDED</span><br\>";
          } 
          else
          {
             //echo "<br>Error: " . $sql . "<br>" . mysqli_error($connection);
             $message ="<span style=\"color: red;\">RECORD $found EXISTS NOT ADDED</span><br\>";
          }
           
       }//end if(strlen($Telephone)>0)                      
       else
       {
          $message ="<span style=\"color: red;\">RECORD NOT ADDED<BR>Telephone CAN NOT BE EMPTY</span><br\>";
       } 
    ?>              


         
  </body>

</html>



