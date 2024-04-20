
<?php
include('dbconnection.php');
session_start(); 

if (isset($_SESSION['staffId']))
{
    $staffId = $_SESSION['staffId'];

}
else if(isset($_SESSION['matricNo'])){

   $matricNo = $_SESSION['matricNo'];
}

else{
  echo "<script type = \"text/javascript\">
  window.location = (\"../index.php\");
  </script>";

}

    // Author Name: MH RONY.
    // GigHub Link: https://github.com/dev-mhrony
    // Facebook Link:https://www.facebook.com/dev.mhrony
    // Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
    // for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com  
    // Visit My Website : developerrony.com 
    
?>