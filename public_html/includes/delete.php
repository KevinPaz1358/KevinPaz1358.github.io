<html>
  <head>
  <title>delete.php</title>

    <!--    **************************************************
    Page Name: delete.php
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
    
    <!-- this is delete.php -->
             
                  
    <?php

      
          echo $Telephone."<br>"; 
      /*    echo $FirstName."<br>";  
          echo $LastName."<br>";  
          echo $Email."<br>";  
          echo $ReportType."<br>";  
          echo $GoogleAPI."<br>";  
          echo $Voice2Text."<br>";  
          echo $Comments."<br>";  
          echo $Platform."<br>";  
      */
                   
       $record = "RECORD ". $Telephone." DELETED";
         echo $record;
       $found = $_POST['found']; 
       //echo "delete  found = [" . $found . "]<br>";
        
       // sql to delete a record
       $sql="DELETE FROM UserReport WHERE Telephone='$Telephone'";
         
       $Telephone=trim($Telephone);
          
       //     if(strlen($Telephone)>0)           
       if (  ( strlen(trim($found)) > 0 ) && ($found == $Telephone) )
       { 
                      
          if (mysqli_query($connection, $sql)) 
          {
             //echo "Record deleted successfully found = {".$found."}";
             $message ="<span style=\"color: red;\">RECORD $found DELETE</span><br\>";
             $found=""; //this clear the flag for record found to be able to modify 
          }         
          else 
          {
             $message = "Error deleting record: " . mysqli_error($connection); 
          }
          
       }   
       else
       {
          $message ="<span style=\"color: red;\">RECORD NOT DELETED<BR>Telephone CAN NOT BE EMPTY</span><br\>";
       }
                 
       
    ?>
                           
                          
    <!--form method="post" action="pgm3.php" >
       <input type="submit" name="return" value="Press to  continue" --/>
    </form> 
                      
  </body>
                    
</html>
