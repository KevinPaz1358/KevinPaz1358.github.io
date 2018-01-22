<html>

  <head>

    <title>
      Paz K, ControllerContacts
    </title>

    <!--    **************************************************
    Page Name: ControllerContacts.php
    Author   : Kevin Paz
    Your URL : ocelot-aul.fiu/~kpaz004
    Course   : CGS 4854 MW 5:00 - 6:15
    Professor: Michael Robinson
    Program  : Program 4
    Purpose  : Retrieve and display information sent using a form.
    Website  : ocelot.aul.fiu.edu/~kpaz004/

    Due Date : 11/8/2017

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

                
       //connecting to mysql 
       //echo "<h3>I am going to connect to mySql<br>";

       //                                server               user      password  database     
       $connection = mysqli_connect("ocelot.aul.fiu.edu","fall17_kpaz004","4158997","fall17_kpaz004");
       if (mysqli_connect_errno())
       {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
       }
       else
       {  
          //echo "<br>I have connected to mySql<br>";            
                          
          $dbName="fall17_kpaz004"; 
          $db_selected = mysqli_select_db( $connection, $dbName );
                      
          if (!$db_selected)
          {
             die( $dbName . ' does not exist, can\'t use it ' . mysqli_error());
          }
          else
          {
            //echo "I selected database : " . $db_selected . " " . $dbName . "<br></h3>" ;
                   
             //access to a table                    
             $tableName = "Contacts";
                      
             $query = mysqli_query( $connection, "SELECT * FROM $tableName" );
                     
             //if table does not exist, create it 
             if(!$query)
             {
                echo "The ".$tableName." table does not exists<br>";
                        
                echo "<br>Creating table : ".$tableName."<br>";
                       
                $sql = "CREATE TABLE ".$tableName."(
                        Telephone VARCHAR(20) NOT NULL,
                        PRIMARY KEY(Telephone),
                        FirstName VARCHAR(30),
                        LastName VARCHAR(30),
                        Email VARCHAR(30),
                        Comments VARCHAR(200)                       
                        )";
                                
                $result = mysqli_query( $connection, $sql );
                         
                //confirm table creation
                if ($result)
                {
                   echo "table ". $tableName." created<br>";
                }
                else
                {
                   die ("Can\'t create ". $tableName." ". mysqli_error($connection) );
                }
                     
             }//if(!$query) if table does not exist, create it 
                        
          }//end if (!$db_selected) connecting to db
                
       }//end if (mysqli_connect_errno()) connecting to mysql

       
       //Retrieve the data input by the user 
       $Telephone    = $_POST['Telephone'];
       $FirstName    = $_POST['FirstName'];
       $LastName     = $_POST['LastName'];
       $Email        = $_POST['Email'];
       $Comments     = $_POST['Comments']; 

 
     /*                 
      
       //Display the data entered by the user
       echo "First Name: ".$FirstName."<br>";  
       echo "Last Name: ".$LastName."<br>";  
       echo "Email: ".$Email."<br>";  
       echo "Phone Number: ".$Telephone."<br><br>";  
 
       echo "Additional Information: <br>".$Comments."<br>";    
                */  
               
       //Perform the action of the submit button which the user selected.                      


                              
       if ( $_POST['Submit'] )
       { 
          include('saveContacts.php');

       }
       else if ( $_POST['Clear'] )
       {
          include('clear.php');
       }
       else
       { 
          echo "<br><h1> you pressed UNKOWN button</h1>";   
       }

       mysqli_close($connection); 

      include( "contact_me.php" );
        
        
    ?>
                 
  </body>

</html>
