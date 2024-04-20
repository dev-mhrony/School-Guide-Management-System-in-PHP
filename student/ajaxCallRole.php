<?php
    // Author Name: MH RONY.
    // GigHub Link: https://github.com/dev-mhrony
    // Facebook Link:https://www.facebook.com/dev.mhrony
    // Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
    // for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com  
    // Visit My Website : developerrony.com 
    include('../includes/dbconnection.php');
    $id = intval($_GET['id']);//gradeId

       $queryss=mysqli_query($con,"select * from tblstaff where Id=".$id."");                        
       $countt = mysqli_num_rows($queryss);
       $row = mysqli_fetch_array($queryss);

       $query=mysqli_query($con,"select * from tblroles where Id=".$row['roleId']."");                        
       $count = mysqli_num_rows($query);
      $roww = mysqli_fetch_array($query);

        echo '<label for="select" class=" form-control-label">Staff Role</label>
        <input id="" name="roleName" readonly type="text" class="form-control" value="'.$roww['roleName'].'"> 
        <input id="" name="roleId" type="hidden" class="form-control" value="'.$row['roleId'].'">
        <input id="" name="staffId" type="hidden" class="form-control" value="'.$row['staffId'].'">'; //gets the staffId


?>

