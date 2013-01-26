<html>
<head>
    <link rel="stylesheet" href="bootstrap_form.css"/>
    <title>
        CONFIRMATION.
    </title>
</head>
<body>
<div class="navbar navbar-inverse" style="margin:0 auto;width:98.7%;">
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
         <a class="brand" href="http://localhost/dbtrial/search.php" style="margin-left:260px;">Search</a>
          <a class="brand" href="howto.html" style="margin-left:-10px;">How to</a>
         
              <!-- Everything you want hidden at 940px or less, place within here -->
              <div class="nav-collapse collapse">
                <!-- .nav, .navbar-search, .navbar-form, etc -->
              </div>
         
            </div>
          </div>
        </div>
  <?php
    error_reporting(0);
    $link=mysql_connect('localhost','root','');
    if($link)
       /* echo "Connection made!"*/;
    else
        die ("Connection attempt unsuccessful!");
    $db_selected=mysql_select_db('test', $link);
    if ($db_selected)
    {
        $name=$_REQUEST['name'];
        $batch=$_REQUEST['batch'];
        $branch=$_REQUEST['branch'];
        $enr=$_REQUEST['enr'];
        $phno=$_REQUEST['phno'];
        $email=$_REQUEST['email'];
        $adrs=$_REQUEST['adrs'];
        $comment=$_REQUEST['comment'];
        $check=mysql_query("select * from class where enr = $enr");
        $piv=0;
        if($enr==""||$name==""||$phno==""||$branch==""||$email=="")
           {
            $piv=1;
            echo '<p class="lead" style="margin: 40px 0px 0px 100px;"> A required field is missing !! Please go back to the <a href="form.html">form</a> and fill it again.</p>';
           }
        else if(mysql_num_rows($check)>0)
           echo '<p class="lead" style="margin: 40px 0px 0px 100px;"> This enrollment no has already been added !! Please check the enrollment number and fill out the <a href="form.html">form</a> again .</p>'; 
        else

        $users=mysql_query("INSERT INTO class VALUES ('$name','$batch','$branch',$enr,'$phno','$adrs','$email','$comment')", $link);
    }
    else
        echo "Could not select database";
    $close_connection=mysql_close($link);
    if ($close_connection&&mysql_num_rows($check)==0&&$piv==0)
       echo '<p class="lead" style="margin: 40px 0px 0px 100px;"> AWESOME!! You are all done. Would you like to <a href="search.php">search</a> for your <em>fucking</em> neighbour??</p>'; 
    else if(mysql_num_rows($check)==0&&$piv==0)
        echo '<p class="lead" style="margin: 40px 0px 0px 100px;"> Shit! something is wrong!!</p>'; 
    error_reporting(0);
  ?>
</body>
</html>