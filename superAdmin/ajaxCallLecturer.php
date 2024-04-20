<?php
    // Author Name: MH RONY.
    // GigHub Link: https://github.com/dev-mhrony
    // Facebook Link:https://www.facebook.com/dev.mhrony
    // Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
    // for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com  
    // Visit My Website : developerrony.com 
    
    include('../includes/dbconnection.php');

    $deptId = intval($_GET['deptId']);//gradeId


        $queryss=mysqli_query($con,"SELECT tblassignedstaff.dateAssigned,tblassignedstaff.staffId, tblstaff.staffId,tblstaff.firstName, tblstaff.lastName, tblstaff.otherName
        from tblassignedstaff 
        INNER JOIN tblstaff ON tblstaff.staffId = tblassignedstaff.staffId
        where departmentId = '$deptId'");
        $countt = mysqli_num_rows($queryss);


        // $queryss=mysqli_query($con,"select * from tblassignedstaff where departmentId=".$deptId." ORDER BY staffId ASC");                        
        // $countt = mysqli_num_rows($queryss);

        if($countt > 0){                       
        echo '<label for="select" class=" form-control-label">Select Lecturer</label>
        <select required name="staffId" class="custom-select form-control">';
        echo'<option value="">--Select Lecturer--</option>';
        while ($row = mysqli_fetch_array($queryss)) {
        echo'<option value="'.$row['staffId'].'" >'.$row['firstName'].' '.$row['lastName'].'</option>';
        }
        echo '</select>';
        }

?>

