<?php
if(!(count($_COOKIE) > 0)) 
{
echo "<script>window.location='/0/login/login.php'</script>";
}
?>
<?php
require ('../db_connect.php');
$currentuser = $_COOKIE['uid'];
$result = mysqli_query($connection,"SELECT * FROM PR_MOD WHERE mail_id = '$currentuser'");
while($row = mysqli_fetch_array($result))
{
echo "<b>First Name:</b> ". $row['first_name'];
echo "<br /><b>Last Name:</b> ". $row['last_name'];
echo "<br /><b>E-Mail ID:</b> ". $row['mail_id'];
echo "<br /><b>Recovery E-Mail ID:</b> ". $row['recovery_mailid'];
}

?>
