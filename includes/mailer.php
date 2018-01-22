<html>

  <head>

    <title>
      Paz K, Mailer
    </title>

    <!--    **************************************************
    Page Name: Mailer.php
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
  <style>
    body {
       background-image: url("../images/Jarvis.jpg");
    }
  </style>

</head>

<body>
<?php 

if(isset($_POST['Submit'])) 
{ 
    $to          = "michael.robinson@cs.fiu.edu"; 
    $subject     = "Paz,K Pgm5 Web1"; 
    $name_field  = $_POST['UserName']; 
    $email_field = $_POST['UserEmail']; 
    $UserTel     = $_POST['UserTel'];  
    $option      = $_POST['MessageType']; 
    $dropdown    = $_POST['drop_down']; 
    $SubjectOther= $_POST['SubjectOther']; 
    $message     = $_POST['Comments'];

    //foreach($_POST['check'] as $value) 
    //{ 
    //    $check_msg .= "Yes, $value\n"; 
    //} 

    $body = " From:         $name_field\n
            E-Mail:       $email_field\n Tel:          $UserTel\n Fax:          $UserFax\n Option:       $option\n Drop-Down:    $dropdown\n SubjectOther: $SubjectOther\n\n\n Message:\n $message\n\n Contact?:     $check_msg\n";

    mail($to, $subject, $body); 
    include('./mailerSubmitted.php');
    include('./mainmenu.php');
} 
else 
{ 
   include('./mainmenu.php');
}
 
?> 
