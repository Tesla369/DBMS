
<!DOCTYPE html> 
<?php 
  
// Set the expiration date to one hour ago 
setcookie("uid", "", time() - 3600);
?> 
  
<html> 
  
<body> 
  
    <?php 
    echo "Cookie 'uid' is deleted."; 
    ?> 
  
</body> 
  
</html> 
