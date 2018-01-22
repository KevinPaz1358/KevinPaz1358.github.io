<html>

<head>
    <!--    **************************************************
    Page Name: Navigation.html
    Author   : Kevin Paz
    Your URL : ocelot-aul.fiu/~kpaz004
    Course   : CGS 4854 MW 5:00 - 6:15
    Professor: Michael Robinson
    Program  : PGM 2
    Purpose  : Learn to use CSS menus, and PHP.

    Due Date : 10/09/2017

    I certify that this work is my own alone.


            ..........{ }..........
    ************************************************** -->



    

    <title> Paz,K CSS menu </title>
        
            
    <style type="text/css">
        nav ul ul 
        {
            display: none;
        }
        
        
        nav ul li:hover > ul 
        {
            display: block;
        }
        
          
        nav ul 
        {
            background: #000000; 
            background: linear-gradient(top, #efefef 0%, #bbbbbb 100%);  
            background: -moz-linear-gradient(top, #efefef 0%, #bbbbbb 100%); 
            background: -webkit-linear-gradient(top, #efefef 0%,#bbbbbb 100%); 
            box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
            padding: 0 20px;
            border-radius: 10px;  
            list-style: none;
            position: relative;
            display: inline-table;
        }
        
            
        nav ul:after 
        {
                content: ""; clear: both; display: block;
	}
                
                
        nav ul li 
        {
                float: left;
        }
        
        
	nav ul li:hover 
        {
                background: #000000; 
                background: linear-gradient(top, #4f5964 0%, #5f6975 40%);
                background: -moz-linear-gradient(top, #4f5964 0%, #5f6975 40%);
                background: -webkit-linear-gradient(top, #4f5964 0%,#5f6975 40%);
        }
                
                
        nav ul li:hover a 
        {
                color: #000000;
        }
                
                
        nav ul li a 
        {
                display: block; padding: 25px 40px;
                color: #ff0000;
	}
                
                
        nav ul ul 
        {
                background: #ff0000; border-radius: 0px; padding: 0; 
                position: absolute; top: 100%;
        }
        
        
	nav ul ul li 
        {
		float: none; 
		border-top: 1px solid white;
		border-bottom: 1px solid #575f6a;
		position: relative;
	}
	
	
        nav ul ul li a 
        {
                padding: 10px 40px;
                color: #000000;
        }	
                
                
        nav ul ul li a:hover 
        {
                background: #C0C0C0; 
        }
                
                
        nav ul ul ul 
        {
                position: absolute; left: 100%; top:0;
        }


    </style>
  
</head>
 
<body bgcolor=silver>

    <nav align="center">
       <ul>
          <li><a href="#">Program 1</a>
             <ul>
                <li><a href="./pgm1">Program 1</a>
                </li>
                <li><a href="./page1">Page 1</a>
                </li>
                <li><a href="./page2">Page 2</a>
                </li>
                <li><a href="./page3">Page 3</a>
                </li>
                <li><a href="./page4">Page 4</a>
                </li>
                <li><a href="../">Home</a>
                </li>
             </ul>
          </li>

          <li><a href="./pgm2">Program 2</a></li>
                    
          <li><a href="./pgm3">Program 3</a></li>

          <li><a href="./pgm4">Program 4</a></li>

          <li><a href="./pgm5">Program 5</a></li>

          <li><a href="../index.html">Home</a></li>
       </ul>
    </nav>

</body> 

</html>


