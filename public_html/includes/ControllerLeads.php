
<html>
  <head>

    <!--    **************************************************
    Page Name: leads.php
    Author   : Kevin Paz
    Your URL : ocelot-aul.fiu/~kpaz004
    Course   : CGS 4854 MW 5:00 - 6:15
    Professor: Michael Robinson
    Program  : Program 4
    Purpose  : Display and allow navigation of contacts.
    Website  : ocelot.aul.fiu.edu/~kpaz004/

    Due Date : 11/8/2017

    I certify that this work is my own alone.


            ..........{ Kevin Paz }..........
    ************************************************** -->

    <title>ControllerLeads</title>

  <style>
    body {
       background-image: url("../images/Jarvis.jpg");
    }
  </style>
  </head>
  
  <body>
  
    <?php

      //extract variable to track array's location
      $location=$_POST['location'];
      $location=(int)$location;
      
      //connect to Host
       $connection = mysqli_connect("ocelot.aul.fiu.edu","fall17_kpaz004","4158997","fall17_kpaz004");
    
      //Extract button pressed, If no button is pressed execute First button code.
      if($_POST['Last'])
      {
        //here Telephone is the primary key, 
        $sql="SELECT * FROM Contacts order by Telephone ASC";
          
        if ($results=mysqli_query($connection,$sql))
        {
          //find the total number of rows and sets the location to last row.
          $rowcount=mysqli_num_rows($results);
          $location=$rowcount-1;
         
          //data_seek command moves the memory pointer in SQL table objects.
          //location must be INT or LONG.
          mysqli_data_seek($results, $location);
            
          $row=mysqli_fetch_assoc($results);
            
          $Telephone = $row['Telephone'];
          $FirstName = $row['FirstName'];
          $LastName  = $row['LastName'];
          $Email     = $row['Email'];
          $Comments  = $row['Comments'];     
          include("./leads.php");            
        }//end if ($results=mysqli_query($connection,$sql)) 
      }//end if($_POST['Last'])
      
      
      else if($_POST['Previous'])
      {
        $sql="SELECT * FROM Contacts order by Telephone ASC";
          
        if ($results=mysqli_query($connection,$sql))
        {
          //Decrement location only if it is above the lowest possible value.
          if ($location >0)    
          {
            $location--;
          }                           
          mysqli_data_seek($results, $location);
          $row=mysqli_fetch_assoc($results);
            
          $Telephone = $row['Telephone'];
          $FirstName = $row['FirstName'];
          $LastName  = $row['LastName'];
          $Email     = $row['Email'];
          $Comments  = $row['Comments']; 
          include("./leads.php");
        }//end if ($results=mysqli_query($connection,$sql))
      }//end else if($_POST['Previous'])
      
      
      else if($_POST['Next'])
      {
        $sql="SELECT * FROM Contacts order by Telephone ASC";
          
        if ($results=mysqli_query($connection,$sql))
        {
          //total number of rows for the upper limit of the search function.
          $rowcount=mysqli_num_rows($results);
              
          //Increment location only if it is below the highest possible value.
          if ($location <$rowcount-1)    
          {
            $location++;
          }                           
                        
          mysqli_data_seek($results, $location);
          $row=mysqli_fetch_assoc($results);
            
          $Telephone = $row['Telephone'];
          $FirstName = $row['FirstName'];
          $LastName  = $row['LastName'];
          $Email     = $row['Email'];
          $Comments  = $row['Comments'];    
          include("./leads.php");
        }//end if ($results=mysqli_query($connection,$sql))
      }//end else if($_POST['Next'])
    
    
      else //get First record
      {
        //Resets location to position 0, and grab the first record in the table.
        $location=0;    
        $sql="SELECT * FROM Contacts order by Telephone ASC limit 1";
             
        if ($result=mysqli_query($connection,$sql))
        {
          $row = mysqli_fetch_array( $result );
                
          $Telephone = $row['Telephone'];
          $FirstName = $row['FirstName'];
          $LastName  = $row['LastName'];
          $Email     = $row['Email'];
          $Comments  = $row['Comments'];    
          include("./leads.php");
        }//end if ($result=mysqli_query($connection,$sql))
      
      }//end else


    
      //mysqli_close($connection); //close sql connection
    
    ?>

  </body>  
  
</html> 
