<html>
  <head>
  <title>modify.php</title>

    <!--    **************************************************
    Page Name: modify.php
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
    
    <!-- this is modify.php -->
        
    <?php
        
       $found = $_POST['found']; 
               
/*     
       echo "modify  found = [" . $found . "]<br>";
        

          echo $Telephone."<br>"; 
          echo $FirstName."<br>";  
          echo $LastName."<br>";  
          echo $Email."<br>";  
          echo $ReportType."<br>";  
          echo $GoogleAPI."<br>";  
          echo $Voice2Text."<br>";  
          echo $Comments."<br>";  
          echo $Platform."<br>";  
      
              
       echo "<br>modify found = [" . $found . "]";
*/            
           
       if (  ( strlen(trim($found)) > 0 ) && ($found == $Telephone) )
       {               
                  
          $query = "UPDATE UserReport 
                    SET FirstName =  '$FirstName',
                    LastName     = '$LastName',
                    Email        = '$Email',
                    ReportType   = '$Report',
                    GoogleAPI    = '$GoogleAPI',
                    Voice2Text   = '$Voice2Text',
                    Comments     = '$Comments', 
                    Platform     = '$Platform' 


                                 
                   WHERE Telephone= '$found'";
                    
          $sql = mysqli_query( $connection,$query );
                                              
          if ($sql)
          {
             $message ="<span style=\"color: red;\">RECORD $found MODIFIED</span><br\>";
          }   
          else
          {
             //echo "Problem updating record. MySQL Error: " . mysqli_error($connection);
             $message ="<span style=\"color: red;\">PROBLEM UPDATING RECORD</span><br\>";
          }
             
       }   
       else
       {
          $message ="<span style=\"color: red;\">FIND THE RECORD BEFORE MODIFYNG IT</span><br\>";
       }
                    

    ?>
            
             
    <!--form method="post" action="../../research/Testing/pgm3.php" >
       <input type="submit" name="return" value="Press to  continue" />
    </form--> 
     
  </body>
                
</html>

