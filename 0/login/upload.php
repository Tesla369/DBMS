<?php
if(!(count($_COOKIE) > 0)) 
{
echo "<script>window.location='/0/login/login.php'</script>";
}
?>
<!DOCTYPE html>	
<html>
<title>
Pineapple
</title>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<head>
<div style="background-color:#FFD700">
<link rel="icon" href="/0/images/pineappleicon.ico"/>
<br>
<center><b style="font-size:70px; color:black">UPLOAD</b></center>
<br>
</div>
<head>
<nav class="navbar navbar-inverse" style="border-color:#00D1FF">
<div class="container-fluid">
<div style="position:10px;" class="navbar-header">
<a class="navbar-brand" href="/0/login/pineapple.php">PINEAPPLE</a>
</div>
<ul class="nav navbar-nav">
<li><a href="/0/login/pineapple.php">Home</a></li>
<!-- 9 -->
<li class="active"><a href="/0/login/upload.php">Upload</a></li>
</li>
<li><a href="/0/login/images/">Download</a></li>
</li>
<li><a href="/0/login/feedback.html">Feedback</a></li>
</li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="/0/login/profile/myprofile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
<li><a href="/0/login/logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
<li><button class="btn btn-danger navbar-btn" onclick=window.location="/0/login/categories/search.php">🔎</button></li>
</ul>
</div>
</nav>
</head>

<?php

include("functions_external.php");
include("selections.php");

if(isset($_POST["form"]))
{
    
    $file_error = "";
    
    switch($_COOKIE["security_level"])
    {
         
        case "0" : 
            
            move_uploaded_file($_FILES["file"]["tmp_name"], "images/" . $_FILES["file"]["name"]);
    
            break;
        
        
        case "1" :
            
        move_uploaded_file($_FILES["file"]["tmp_name"], "images/" . $_FILES["file"]["name"]);

	    break;
        
        case "2" :            
                       
	move_uploaded_file($_FILES["file"]["tmp_name"], "images/" . $_FILES["file"]["name"]);
            
            break;
        
        
        default : 
            
	move_uploaded_file($_FILES["file"]["tmp_name"], "images/" . $_FILES["file"]["name"]);
        
    }    
        
}    



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>UPLOAD FILES</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<!--<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>-->
<script src="js/html5.js"></script>
</head>
<body>
<center>
<div id="main">
	<h1>Upload your File/Image:</h1></a>

    <form action="<?php echo($_SERVER["SCRIPT_NAME"]);?>" method="POST" enctype="multipart/form-data">

        <p><label for="file">Please upload the Image Here:</label><br />
        <input calss="btn" style="background-color:#C0C0C0" type="file" name="file"></p>

        <input type="hidden"  name="MAX_FILE_SIZE" value="10">
        <!-- <input type="hidden" name="MAX_FILE_SIZE" value="100000"> -->

        <input class="btn" style="background-color:#00D1FF" type="submit" name="form" value="Upload">

    </form>

    <br />
    <?php

    if(isset($_POST["form"]))
    {

        if(!$file_error)
        {
        

            echo "The image has been uploaded <a class=\"btn\" href=\"images/" . $_FILES["file"]["name"] . "\" target=\"_blank\">HERE</a>";

        }

        else
        {

            echo "<font color=\"black\">" . $file_error . "</font>";        

        }

    }

    ?>  
</div>
</center>      
</body>
    
</html>
