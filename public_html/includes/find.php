<html>
  <head>
  <title>find.php</title>

    <!--    **************************************************
    Page Name: find.php
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
                       
    <!-- this is find.php -->
                        
                                  
    <?php
         
/*            
       echo  "find.php Telephone = [".$Telephone."]<br>";
       echo  $FirstName;
       echo  $LastName;
       echo  $Email;
       echo  $age;
       echo  $gender;
       echo  $Preferences;
       echo  $checkbox;
       echo  $Others;
       echo  $SpecialNeeds;            
*/
       echo "find.php table : ".$tableName."<br>";

       echo "<br>find.php  found = [" . $found . "]";
       $found = $Telephone;
          
       echo "<br>find.php Found = Telephone = [" . $found . "]";
  /*              
*/           
                  
       //$sql="SELECT * FROM UserReport ORDER BY Telephone";
           
       $sql="SELECT * FROM UserReport where Telephone = '$Telephone'";
             
       if ($result=mysqli_query($connection,$sql))
       {
          //printf("Result of mysqli_query(connection,sql) = %d<br>", $result);
          
          // Return the number of rows in result set
          $rowcount=mysqli_num_rows($result);
                   
          //printf("Result set has %d rows.\n",$rowcount);
             
                        
          while( $row = mysqli_fetch_array( $result ) )
          {
             $Telephone    = $row['Telephone'];     //primary key
             $FirstName    = $row['FirstName'];     //type="text"
             $LastName     = $row['LastName'];      //type="text"
             $Email        = $row['Email'];         //type="text"
             $ReportType   = $row['ReportType'];    //type="radio"
             $GoogleAPI    = $row['GoogleAPI'];     //type="checkbox"
             $Voice2Text   = $row['Voice2Text'];    //type="checkbox" 
             $Comments     = $row['Comments'];      //type="checkbox"
             $Platform     = $row['Platform'];      //type="checkbox"
       
          }



          echo $Telephone."<br>"; 
          echo $FirstName."<br>";  
          echo $LastName."<br>";  
          echo $Email."<br>";  
          echo $ReportType."<br>";  
          echo $GoogleAPI."<br>";  
          echo $Voice2Text."<br>";  
          echo $Comments."<br>";  
          echo $Platform."<br>";  




          //printf("\ni am here in find.php\n [%s] [%s]", $Telephone, $FirstName );
          //echo "(".$Telephone." ".$FirstName.")";


          $Telephone=trim($Telephone); //take all front and back spaces out

                
          //if (mysqli_query($connection, $sql)) 
          if ( $rowcount )
          {
             $found = $Telephone;
echo "found = " . $found;
             $message ="<span style=\"color: red;\">RECORD $found FOUND</span><br\>";
          } 
          else if( strlen($Telephone) ==0 )           
          {
             $message ="<span style=\"color: red;\">Telephone CAN NOT BE EMPTY</span><br>";
             //echo "<br>Error: " . $sql . " " . mysqli_error($connection);
                  
             //clear data in variables       
             //$Telephone    = "";
             $FirstName    = "";
             $LastName     = "";
             $Email        = "";
             $ReportType   = "";
             $GoogleAPI    = "";
             $Voice2Text   = "";
             $Comments     = "";
             $Platform     = "";           
                      
             $find         = "";  
          }
          else 
          {
             $message ="<span style=\"color: red;\">RECORD $Telephone NOT FOUND</span><br>";
             //echo "<br>Error: " . $sql . " " . mysqli_error($connection);
                  
             //clear data in variables       
             //$Telephone    = "";
             $FirstName    = "";
             $LastName     = "";
             $Email        = "";
             $ReportType   = "";
             $GoogleAPI    = "";
             $Voice2Text   = "";
             $Comments     = "";
             $Platform     = "";           
                      
             $find         = "";  
          }

             
      }
     
       
   ?>


    <!--form method="post" action="../../research/Testing/pgm3.php" >
       <input type="submit" name="return" value="Press to  continue" />
    </form--> 


  </body>

</html>

