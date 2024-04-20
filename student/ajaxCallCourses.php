<?php
    // Author Name: MH RONY.
    // GigHub Link: https://github.com/dev-mhrony
    // Facebook Link:https://www.facebook.com/dev.mhrony
    // Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
    // for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com  
    // Visit My Website : developerrony.com 
    include('../includes/dbconnection.php');

    $deptId = intval($_GET['deptId']);//gradeId

        $queryss=mysqli_query($con,"select * from tblcourse where departmentId=".$deptId." ORDER BY courseTitle ASC");                        
        $countt = mysqli_num_rows($queryss);

        if($countt > 0){                       
        echo '<label for="select" class=" form-control-label">Course</label>
        <select required name="courseId" class="custom-select form-control">';
        echo'<option value="">--Select Course--</option>';
        while ($row = mysqli_fetch_array($queryss)) {
        echo'<option value="'.$row['courseId'].'" >'.$row['courseTitle'].'</option>';
        }
        echo '</select>';
        }

?>

