<html>

<head>
<title>Time Script</title>


   <script>
            
         
      function currentTime() 
      {
         var today   = new Date();
         var hour    = today.getHours();
         var minutes = today.getMinutes();
         var sec     = today.getSeconds();
      
         minutes = checkTime(minutes);
         sec     = checkTime(sec);
         
         var temp =  "Current Time : "+hour+":"+minutes+":"+sec;
         var color = temp.fontcolor("white");
         document.getElementById('txt').innerHTML = color;

      
         var t = setTimeout(function(){currentTime()},500);
      }


      function checkTime(i) 
      {
         if (i<10) {i = "0" + i};  // add zero in front of numbers < 10
         return i;
      }
   
   </script>

</head>

<body onload="currentTime()">
        
   <script>

    
      loggedInTime();
             
      var temp1;
      
      function loggedInTime( temp )
      {
         var time = new Date();  
         var temp2 =  "Logged in:&nbsp; &nbsp;: " + time;
         temp1 = temp2;
         document.write( temp2.fontcolor("white") );
      }

      var temp3 = currentTime();
      //document.write( " " + "I am next " + temp1 ); 
      
      document.write( " " + temp1 + temp3 );
      
   </script>
      
      
   <div id="txt"></div>


</body>

</html>

