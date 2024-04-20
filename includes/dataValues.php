
<?php 
error_reporting(0);



    // Author Name: MH RONY.
    // GigHub Link: https://github.com/dev-mhrony
    // Facebook Link:https://www.facebook.com/dev.mhrony
    // Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
    // for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com  
    // Visit My Website : developerrony.com 
$que=mysqli_query($con,"SELECT * from tbldepartment where Id = '$departmentId'"); //department                     
$row = mysqli_fetch_array($que);  
$departmentName = $row['departmentName'];      


$que=mysqli_query($con,"SELECT * from tblfaculty where Id = '$facultyId'"); //faculty                      
$row = mysqli_fetch_array($que);  
$facultyName = $row['facultyName'];      

    // Author Name: MH RONY.
    // GigHub Link: https://github.com/dev-mhrony
    // Facebook Link:https://www.facebook.com/dev.mhrony
    // Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
    // for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com  
    // Visit My Website : developerrony.com 


////////////  ADMINISTRATOR DASHBOARD //////////////

$queryStudent=mysqli_query($con,"SELECT * from tblstudent where facultyId = '$facultyId' and departmentId = '$departmentId'"); //assigned staff
$adminCountStudent = mysqli_num_rows($queryStudent);

$queryCourses=mysqli_query($con,"SELECT * from tblcourse where facultyId = '$facultyId' and departmentId = '$departmentId'"); //today's Attendance
$adminCountCourses=mysqli_num_rows($queryCourses);

    // Author Name: MH RONY.
    // GigHub Link: https://github.com/dev-mhrony
    // Facebook Link:https://www.facebook.com/dev.mhrony
    // Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
    // for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com  
    // Visit My Website : developerrony.com 


//-------------------------SUPER ADMINISTRATOR


$admin=mysqli_query($con,"SELECT * from tbladmin where adminTypeId = '2'");
$countAdmin=mysqli_num_rows($admin);

$todaysAtt=mysqli_query($con,"SELECT * from tblattendance where date(DateTaken)=CURDATE();"); //today's Attendance
$countTodaysAttendance=mysqli_num_rows($todaysAtt);

$allAtt=mysqli_query($con,"SELECT * from tblattendance");
$countAllAttendance=mysqli_num_rows($allAtt);

// //-------------------------------------------
    // Author Name: MH RONY.
    // GigHub Link: https://github.com/dev-mhrony
    // Facebook Link:https://www.facebook.com/dev.mhrony
    // Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
    // for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com  
    // Visit My Website : developerrony.com 

$staffQuery=mysqli_query($con,"SELECT * from tblstaff"); //staff
$countAllStaff = mysqli_num_rows($staffQuery);

$departmentQuery=mysqli_query($con,"SELECT * from tbldepartment"); //department
$countDepartment = mysqli_num_rows($departmentQuery);

$facultyQuery=mysqli_query($con,"SELECT * from tblfaculty"); //faculty
$countFaculty = mysqli_num_rows($facultyQuery);
    // Author Name: MH RONY.
    // GigHub Link: https://github.com/dev-mhrony
    // Facebook Link:https://www.facebook.com/dev.mhrony
    // Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
    // for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com  
    // Visit My Website : developerrony.com 
$studentQuery=mysqli_query($con,"SELECT * from tblstudent"); //student
$countAllStudent = mysqli_num_rows($studentQuery);

$courseQuery=mysqli_query($con,"SELECT * from tblcourse"); //courses
$countAllCourses = mysqli_num_rows($courseQuery);

$courseSession=mysqli_query($con,"SELECT * from tblsession"); //courses
$countAllSession = mysqli_num_rows($courseSession);

$resultComputed=mysqli_query($con,"SELECT * from tblfinalresult"); //courses
$countAllComputed = mysqli_num_rows($resultComputed);

$levelQue=mysqli_query($con,"SELECT * from tbllevel"); //courses
$countAllLevel = mysqli_num_rows($levelQue);

$semesterQue=mysqli_query($con,"SELECT * from tblsemester"); //courses
$countAllSemester = mysqli_num_rows($semesterQue);

$distinctno=mysqli_query($con,"SELECT * from tblfinalresult WHERE classOfDiploma = 'Distinction'"); //dist. no.
$countAllDist = mysqli_num_rows($distinctno);

$uppercred=mysqli_query($con,"SELECT * from tblfinalresult WHERE classOfDiploma = 'Upper Credit'"); //upper cred
$countAllUpc = mysqli_num_rows($uppercred);

$lowercred=mysqli_query($con,"SELECT * from tblfinalresult WHERE classOfDiploma = 'Lower Credit'"); //lower cred
$countAlllc = mysqli_num_rows($lowercred);

$justpass=mysqli_query($con,"SELECT * from tblfinalresult WHERE classOfDiploma = 'Pass'"); //just passed
$countAlljp = mysqli_num_rows($justpass);

$failed=mysqli_query($con,"SELECT * from tblfinalresult WHERE classOfDiploma = 'Fail'"); //failed numbers
$countAllf = mysqli_num_rows($failed);
    // Author Name: MH RONY.
    // GigHub Link: https://github.com/dev-mhrony
    // Facebook Link:https://www.facebook.com/dev.mhrony
    // Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
    // for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com  
    // Visit My Website : developerrony.com 

//-----------------------LECTURER----------------------

$lecCourse=mysqli_query($con,"SELECT * from tblcourse where departmentId = '$departmentId'"); //courses
$countLecCourse = mysqli_num_rows($lecCourse);

$que=mysqli_query($con,"SELECT * from tblassignedstaff where departmentId = '$departmentId'"); //assigned staff
$lecCountStaff = mysqli_num_rows($que);
    // Author Name: MH RONY.
    // GigHub Link: https://github.com/dev-mhrony
    // Facebook Link:https://www.facebook.com/dev.mhrony
    // Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
    // for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com  
    // Visit My Website : developerrony.com 

//-----------------------STUDENT----------------------

$studCourse=mysqli_query($con,"SELECT * from tblcourse where departmentId = '$departmentId'"); //courses
$coutAllStudentCourses = mysqli_num_rows($studCourse);

$queResult=mysqli_query($con,"SELECT * from tblfinalresult where matricNo = '$matricNo'"); //assigned staff
$countAllStudResult = mysqli_num_rows($queResult);
    // Author Name: MH RONY.
    // GigHub Link: https://github.com/dev-mhrony
    // Facebook Link:https://www.facebook.com/dev.mhrony
    // Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
    // for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com  
    // Visit My Website : developerrony.com 
?>