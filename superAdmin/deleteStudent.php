<?php
 include('../includes/dbconnection.php');
include('../includes/session.php');

$delid = $_GET['delid'];

$query = mysqli_query($con,"DELETE FROM tblstudent WHERE matricNo='$delid'");

if ($query == TRUE) {

        echo "<script type = \"text/javascript\">
        window.location = (\"viewStudent.php\")
        </script>";  
}
else{

echo "<script type = \"text/javascript\">
        window.location = (\"createStudent.php\")
        </script>";  

}


?>

<!--  Author Name: MH RONY.
    GigHub Link: https://github.com/dev-mhrony
    Facebook Link:https://www.facebook.com/dev.mhrony
    Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
    for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com  
    Visit My Website : developerrony.com 
-->