<html>
<head>
	<link rel="stylesheet" href="bootstrap_form.css"/>
	<title>
		Search!
	</title>
</head>
<body>
	<div class="navbar navbar-inverse" style="margin-left:8px;width:98.7%;">
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
		     <a class="brand" href="http://localhost/dbtrial/search.php" style="margin-left:280px;">Search</a>
		      <a class="brand" href="howto.html" style="margin-left:-10px;">How to</a>
		 
		      <!-- Everything you want hidden at 940px or less, place within here -->
		      <div class="nav-collapse collapse">
		        <!-- .nav, .navbar-search, .navbar-form, etc -->
		      </div>
		 
		    </div>
		  </div>
		</div>
	<form class="form-search class="as" action="http://localhost/dbtrial/search.php" method="post">
	   <input class="input-xxlarge" style="margin-left:100px;"  type="text" placeholder="Search for?" name="srch" /><br><br>
	    <input class="input-xxlarge" style="margin-left:100px;"  type="text" placeholder="Search by?" name="srchb" /><br><br>
	   <button type="submit" class="btn" style="margin-left:100px;">Search</button>
	</form><br>
	<?php
	ini_set('display_errors',-1);
	error_reporting(0);
	$link=mysql_connect('localhost','root','');
    if($link)
       /* echo "Connection made!"*/;
    else
        die ("Connection attempt unsuccessful!");
    $db_selected=mysql_select_db('test', $link);
    if ($db_selected)
    {
    	error_reporting(0);
   	$search=$_REQUEST['name'];
	$temp=mysql_query("SELECT * FROM class WHERE name='$search'");
	//$row = mysql_fetch_assoc($temp);
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
    			$outadrs=ucwords($outadrs);
    			$outbatch=ucfirst($outbatch);

		    	echo "<table class='table table-striped table-bordered' style='margin-left:100px;width:600px;'>
		    	<tr>
		    	  <th>name</th><td>$outname</td>
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
	?>
	</body>
	<html>