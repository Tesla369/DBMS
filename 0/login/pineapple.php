<?php
if(!(count($_COOKIE) > 0)) 
{
echo "<script>window.location='/0/login/login.php'</script>";
}
?>

<!DOCTYPE>	
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
<div style="background-color:#000000">
<center><b style="font-size:100px; color:#e8af0a">FILE UPLOADER</b></center>
<head> </div>
<div style="background-color:black">
<link rel="icon" href="/0/images/pineappleicon.ico"/>
<br>
<center><img src="/0/images/pineappletitle.jpg"></center>
<br>
</div>
<head>
<nav class="navbar navbar-inverse" style="border-color:#00D1FF">
<div class="container-fluid">
<div style="position:10px;" class="navbar-header">
<a class="navbar-brand" href="/0/login/pineapple.php">PINEAPPLE</a>
</div>
<ul class="nav navbar-nav">
<li class="active"><a href="/0/login/pineapple.php">Home</a></li>
<!-- 9 -->
<li><a href="/0/login/upload.php">Upload</a></li>
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
<body style="background-color:#e8af0a">
<div>
<table width=100%>
<tr>
<td>
<center>
<h1>
Ultra
<br>
Easy 
<br>
File Uploader
</h1>
<h3>
Quick Uploads and Downloads.
</h3>
<center>
</td>
<td>
<center>
<img src="/0/images/pineapplephone.jpg">
</center>
</td>
</tr>
<tr>
<td>
<center>
<img src="/0/images/pine.jpg" width=30%>
</center>
</td>
<td>
<center>
<h1>
Pineapple Brings You
<br>
A new File Uploader PineUP
</h1>
<h3>
Smooth and Fluid Upload.
</h3>
</center>
</td>
</tr>
<tr>
<td>
<center>
<h1>
High Quality
<br>
Optimized!
<br>
0 Compression
</h1>
<h3>
Super Fast Upload
</h3>
<h4>
100% Upload and Download in less than 20 seconds.
</h4>
</center>
</td>
<td>
<center>
<img src="/0/images/pinebat.jpg" width=30%>
</center>
</td>
</tr>
</table>
</body>
</head>
</html>
