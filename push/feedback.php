<html>
	<head>
		<link rel="stylesheet" type="text/css" href="bootstrap_aboutme.css"/>
		<title> Feed me back!!</title>
	</head>
	<body>
		<div id="nav" >
		<div class="navbar navbar-inverse" style="margin:0 auto;width:96%;">
		  <div class="navbar-inner">
		    <div class="container">
		 
		      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
		      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse" >
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </a>
		 
		      <!-- Be sure to leave the brand out there if you want it shown -->
		      <a class="brand" href="aboutme.html" >About</a>
		      <a class="brand" href="http://localhost/aboutme/hobbies.php">Hobbies</a>
		      <a class="brand" href="education.html" >Timeline</a>
		      <a class="brand" href="http://localhost/aboutme/contact.php" style="margin-left:670px;font-size:23px;">Lets meet up</a>
		      <a class="brand" href="http://localhost/aboutme/feedback.php" style="margin-left:-10px;color:white;">Feedback</a>
		 
		      <!-- Everything you want hidden at 940px or less, place within here -->
		      <div class="nav-collapse collapse">
		        <!-- .nav, .navbar-search, .navbar-form, etc -->
		      </div>
		 
		    </div>
		  </div>
		</div><div class="hero-unit">
			 <h1 id="top1" style="margin-left:100px;">Leave behind a <em>mark</em>.</h1>
		</div></div>
		<div id="back"><br><br><br>
        <p class="lead" id="normal2">Would you like to rate my website ?</p><br><br>
        <form class="form-search " action="http://localhost/aboutme/cal.php" method="post">
		   <!-- <input class="input-large" style="margin-left:150px;"  type="text" placeholder="Whats you rating??" name="comment"><br><br>
		  <button type="submit" class="btn" style="margin-left:200px;">Submit</button> --> 
		  
          <input  id="appendedInputButton" name="score"  style="margin-left:150px;padding:15px 4px;font-size:24px;" type="text"><p class="lead" style="display:inline-block;padding-top:5px;font-size:30px;"> / 5</p>
		  <button type="submit" class="btn" style="margin-left:0px;">Go!</button>

		  </form><br>
		  <p class="lead" id="normal2">Or perhaps leave behind a comment?</p><br><br>
        <form class="form-search " action="http://localhost/aboutme/cal2.php" method="post">
		   <!-- <input class="input-large" style="margin-left:150px;"  type="text" placeholder="Whats you rating??" name="comment"><br><br>
		  <button type="submit" class="btn" style="margin-left:200px;">Submit</button> --> 
		  
          <input  id="appendedInputButton" name="cmnt"  style="margin-left:150px;padding:15px 4px;font-size:24px;width:900px;" type="text">
		  <button type="submit" class="btn" style="margin-left:0px;">Go!</button>
		  
		  </form><br>
		</div><br><br>
		 <?php
			ini_set('display_errors',-1);
			error_reporting(E_ALL);
			$link=mysql_connect('localhost','root','');
		    if($link);
		        // echo "Connection made!";
		    else
		        die ("Connection attempt unsuccessful!");
		    $db_selected=mysql_select_db('aboutme', $link);
		    if ($db_selected)
		    {
		    	error_reporting(0);
		   		$temp=mysql_query("SELECT * FROM hobby");
		   		$number=mysql_num_rows($temp);
		   		
		   		$avg=0;
		   		
		   		$sum=0;
		   		if ($number>0)
		   		{
			   		
			   		for ( $i=0;$i<$number;$i=$i+1)
			   		{
			   			
			   			$row = mysql_fetch_assoc($temp);
			    	    $outs= $row['rate'];
		
			   			$sum=$sum+$outs;
			   		}
			   		
			        $avg=$sum/$number;
			        
			    }
		        else
		        $avg=2.34;	
				   
					
		   		$temp1=mysql_query("SELECT * FROM feedback");
		   		$number1=mysql_num_rows($temp1);
		   		if ($number1>0)
		   		{
			   		
			   		for ( $i=0;$i<$number1;$i=$i+1)
			   		{
			   			
			   			$row1 = mysql_fetch_assoc($temp1);
			    	    $outs1= $row1['comment'];
		                //echo $outs1;
			   			//$sum=$sum+$outs;
			   		}
			   		
			       // $avg=$sum/$number;
			        
			    }
		        else
		        $outs1="none";	
		        
		    }
		    
		?>
