<html>
<head>
	<link rel="stylesheet" href="bootstrap_form.css"/>
	<title>
		Search!
	</title>
</head>
<body>
	<div class="navbar navbar-inverse" style="margin: 0 auto;width:98.7%;">
		  <div class="navbar-inner">
		    <div class="container">
		 
		      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
		      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse" >
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </a>
		 
		      <!-- Be sure to leave the brand out there if you want it shown -->
		      <a class="brand" href="aboutit.html">About</a>
		      <a class="brand" href="form.html">Form</a>
		      <a class="brand" href="aboutit.html" style="margin-left:320px;font-size:23px;">Who the fuck is my neighbour?!?</a>
		     <a class="brand" href="http://localhost/dbtrial/search.php" style="margin-left:260px;color:white">Search</a>
		      <a class="brand" href="howto.html" style="margin-left:-10px;">How to</a>
		 
		      <!-- Everything you want hidden at 940px or less, place within here -->
		      <div class="nav-collapse collapse">
		        <!-- .nav, .navbar-search, .navbar-form, etc -->
		      </div>
		 
		    </div>
		  </div>
		</div>
		<p class="lead" class="as" style="margin-left:100px;margin-top:33px;">Ready to find out? </p>
	<form class="form-search class="as" action="http://localhost/dbtrial/search.php" method="post">

	   <input class="input-xxlarge" style="margin-left:100px;"  type="text" placeholder="Search for?" name="srch" /><br><br>

       <input class="input-xxlarge" style="margin-left:100px;"  type="text" placeholder="Search by?" name="srchb" /><br><br>
	   <button type="submit" class="btn" style="margin-left:100px;">Search</button>
	</form><br>
	<?php
	ini_set('display_errors',-1);
	error_reporting(E_ALL);
	$link=mysql_connect('localhost','root','');
    if($link)
       /* echo "Connection made!"*/;
    else
        die ("Connection attempt unsuccessful!");
    $db_selected=mysql_select_db('test', $link);
    if ($db_selected)
    {
    	error_reporting(0);
   		$search=$_REQUEST['srch'];
   		$searchby=$_REQUEST['srchb'];
   		//echo "srch".$search;
   		
	   		
	   	if($search==""&&$searchby=="") echo "";
		else if($search=="") echo "<p class='lead' style='margin: 0px 0px 50px 100px;'> You left the <em>search for?</em> field empty! </p>";
		//else if($searchby=="") echo "<p class='lead' style='margin: 0px 0px 50px 100px;'> You left the <em>search by?</em> field empty! </p>";
		else { 
			if($searchby=="") $searchby="name";
			//echo "srchby".$searchby;
			$temp=mysql_query("SELECT * FROM class WHERE $searchby like '%$search%'");

			if(mysql_num_rows($temp)==0)
				echo '<p class="lead" style="margin: 40px 0px 0px 100px;"> No such data exists. </p>';
			else if(mysql_num_rows($temp)==1)
			{
				$row = mysql_fetch_assoc($temp);
			    	$outname= $row['name'];
			        $outenr= $row['enr'];
			        $outbatch=$row['batch'];
			        $outbranch=$row['branch'];
			        $outphno=$row['phno'];
			        $outemail=$row['email'];
			        $outadrs=$row['address'];
	    			//echo("asdasdasd");
	    			$outname=ucwords($outname);
	    			$outbranch=strtoupper($outbranch);
	    			$outadrs=strtoupper($outadrs);
	    			$outbatch=ucfirst($outbatch);
                    echo "<p class='lead' style='margin: 0px 0px 50px 100px;'> You checked out: $search </p>";
			    	echo "<table class='table table-striped table-bordered' style='margin-left:100px;width:600px;'>
			    	<tr>
			    	  <th>Name</th><td>$outname</td>
			    	</tr>
			    	<tr>
			    	  <th>Enrollment number</th><td>$outenr</td>
			    	</tr>
			    	<tr>
			    	  <th>Branch</th><td>$outbranch</td>
			    	</tr>
			    	<tr>
			    	<th>Batch</th><td>$outbatch</td>
			    	</tr>
			    	<tr>
			    	<th>Phone number</th><td>$outphno</td>
			    	</tr>
			    	<tr>
			    	<th>Email ID</th><td>$outemail</td>
			    	</tr>
			    	<tr>
			    	<th>Address</th><td>$outadrs</td>
			    	</
			    		</table>  ";
			}
			else if(mysql_num_rows($temp)>=1)
			{	
				$outresno=mysql_num_rows($temp);
				echo "<p class='lead' style='margin: 0px 0px 50px 100px;'> You checked out: '$search' and your search returned $outresno results. </p>";
		    	for($i=0;$i<mysql_num_rows($temp);$i++)
		    	{
			    	$row = mysql_fetch_assoc($temp);
			    	$outname= $row['name'];
			        $outenr= $row['enr'];
			        $outbatch=$row['batch'];
			        $outbranch=$row['branch'];
			        $outphno=$row['phno'];
			        $outemail=$row['email'];
			        $outadrs=$row['address'];
	    			//echo("asdasdasd");
	    			$outname=ucwords($outname);
	    			$outbranch=strtoupper($outbranch);
	    			$outadrs=strtoupper($outadrs);
	    			$outbatch=ucfirst($outbatch);
			    	// $outname= $row['name'];
			    	// $outbatch=$row['branch'];
			    	// $outenr=$row['enr'];
			    	// $outname=ucwords($outname);
			    	// $outbatch=strtoupper($outbatch);
			    	// $outadrs=$row['address'];
			    	// $outadrs=strtoupper($outadrs);
			    	if($searchby=="address")

			    	echo "<p class='lead' style='margin: 40px 0px 0px 100px;'> <a href='search.php? srch=$outname'> $outname </a> of branch $outbranch and Address: '$outadrs'.</p>";
			    	else if($searchby=="batch")
			    		echo "<p class='lead' style='margin: 40px 0px 0px 100px;'> <a href='search.php? srch=$outname'> $outname </a> of branch $outbranch and Batch $outbatch.</p>";
			    	else if ($searchby=="phno")
			    		echo "<p class='lead' style='margin: 40px 0px 0px 100px;'> <a href='search.php? srch=$outname'> $outname </a> of branch $outbranch and Phone Number $outphno.</p>";
                    else if ($searchby=="email")
                    echo "<p class='lead' style='margin: 40px 0px 0px 100px;'> <a href='search.php? srch=$outname'> $outname </a> of branch $outbranch and Email ID '$outemail'.</p>";	
			    	else 	
			    	echo "<p class='lead' style='margin: 40px 0px 0px 100px;'> <a href='search.php? srch=$outname'> $outname </a> of branch $outbranch and Enrollment number $outenr.</p>";
		       }
		    }
		}
    }
    else echo '<p class="lead" style="margin: 40px 0px 0px 100px;"> Something went wrong:/</p>';
    ?>
    
	</body>
	</html> 