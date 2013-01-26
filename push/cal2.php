<html>
	<head>
		<link rel="stylesheet" type="text/css" href="bootstrap_aboutme.css"/>
		<title> Feed me back!</title>
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
		</div>
	</div>
	</div><div class="hero-unit">
		     <h1 id="top1" style="margin-left:100px;font-size:70px;">Thanks for commenting on my work!!</h1>
		</div>
		<!-- <p>here</p> -->
		<div id="back"><br><br>
	    
	    <p class="lead" id="normal" style="font-size:70px;">Past comments:</p><br>
        </div><br><br>
		<?php
			ini_set('display_errors',-1);
			error_reporting(E_ALL);
			$link=mysql_connect('localhost','root','');
		    if($link)
		       /* echo "Connection made!"*/;
		    else
		        die ("Connection attempt unsuccessful!");
		    $db_selected=mysql_select_db('aboutme', $link);
		    
		    if ($db_selected)
		    {

		    	error_reporting(0);
		    	$cmnt=$_REQUEST['cmnt'];
                //echo "$cmnt";
                echo "<div id='back'><br><br><br>";
		    	$users=mysql_query("INSERT INTO feedback VALUES ('$cmnt')", $link);
		   		$temp=mysql_query("SELECT * FROM feedback");
		   		$number=mysql_num_rows($temp);
		   		//echo "$number";
		   		if ($number>0)
		   		{

			   		
			   		for ( $i=0;$i<$number;$i=$i+1)
			   		{
			   			
			   			$row = mysql_fetch_assoc($temp);
			    	    $outs= $row['comment'];
			   			 if ($number-$i==3)
			   				$out3=$outs;
			   			else if ($number-$i==2)
			   				$out2=$outs;
			   			else if ($number-$i==1)
			   				$out1=$outs;
			   			
			   		}
			   		
			      echo "<p class='lead' style='margin-left:100px;font-size:30px;'>$out1</p>";
			      echo "<p class='lead' style='margin-left:100px;font-size:30px;'>$out2</p>";
			      echo "<p class='lead' style='margin-left:100px;font-size:30px;'>$out3</p>";
			        
			    }
		        else
		        $outs="none";	
		        
		    }
		    
		?>
		
		 <br><br>
         </div><br><br>
    </body>
</html>