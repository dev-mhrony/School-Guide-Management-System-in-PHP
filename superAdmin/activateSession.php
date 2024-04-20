<?php
    include('../includes/dbconnection.php');
    include('../includes/session.php');

    // Author Name: MH RONY.
    // GigHub Link: https://github.com/dev-mhrony
    // Facebook Link:https://www.facebook.com/dev.mhrony
    // Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
    // for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com  
    // Visit My Website : developerrony.com 

    $activateId = $_GET['activateId'];

    $query1=mysqli_query($con,"update tblsession set isActive = 0 where isActive = 1");
    if($query1 == TRUE){

        $query=mysqli_query($con,"update tblsession set isActive = 1 where Id = '$activateId'");
        if ($query === TRUE) {

                echo "<script type = \"text/javascript\">
                window.location = (\"createSession.php?status=success\")
                </script>";  
        }
        else{

            echo "<script type = \"text/javascript\">
            window.location = (\"createSession.php?status=fail\")
            </script>";  
        }

    }
    else{

            echo "<script type = \"text/javascript\">
            window.location = (\"createSession.php?status=fail\")
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