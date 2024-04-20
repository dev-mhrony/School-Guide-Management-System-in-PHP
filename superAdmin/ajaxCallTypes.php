<?php
    // Author Name: MH RONY.
    // GigHub Link: https://github.com/dev-mhrony
    // Facebook Link:https://www.facebook.com/dev.mhrony
    // Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
    // for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com  
    // Visit My Website : developerrony.com 
    
    include('../includes/dbconnection.php');

    $tid = intval($_GET['tid']);//typeId

       
        if($tid == 2){      //Single date                  
       
        echo "<label for='select' class='form-control-label'>Select Date</label>
        <input  id='' name='singleDate' type='date' class='form-control cc-cvc' value='' Required>";

        }
        else if($tid == 3){           //Between date Range             
       
        echo " <div class='row'>
        <div class='col-6'>
        <label for='select' class='form-control-label'>From Date</label>
        <input  id='' name='fromDate' type='date' class='form-control cc-cvc' value='' Required>
        </div>
        <div class='col-6'>
        <label for='select' class='form-control-label'>To Date</label>
        <input  id='' name='toDate' type='date' class='form-control cc-cvc' value='' Required>
        </div>
        </div>";

        }

?>

