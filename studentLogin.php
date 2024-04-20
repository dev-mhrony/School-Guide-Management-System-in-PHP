  <!--  Author Name: MH RONY.
        GigHub Link: https://github.com/dev-mhrony
        Facebook Link:https://www.facebook.com/dev.mhrony
        Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
        for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com  
        Visit My Website : developerrony.com 
  -->
<?php
error_reporting(0);
    session_start();
    include('includes/dbconnection.php');

    if(isset($_POST['login']))
    {
        $matricNo=$_POST['matricNo'];
        // $password=md5($_POST['password']);
        $password=$_POST['password'];
        $query = mysqli_query($con,"select * from tblstudent where matricNo='$matricNo' && password='$password'");
        $count = mysqli_num_rows($query);
        $row = mysqli_fetch_array($query);

        if($count > 0)
        {
            $_SESSION['matricNo']=$row['matricNo'];
            $_SESSION['firstName']=$row['firstName'];
            $_SESSION['lastName']=$row['lastName'];

            echo "<script type = \"text/javascript\">
                window.location = (\"student/index.php\")
               </script>";  
        }
        else
        {
            $errorMsg = "<div class='alert alert-danger' role='alert'>Invalid Username/Password!</div>";
        }
    }
  ?>
            <!-- =======================================================
              * Project Name: Student Gaide - CCBD
              * Project URL: 
              * Author: Code Camp BD
              * Developer: MH RONY
              * License: Free to Use just Educational Perpus
            ======================================================== -->

<!doctype html>
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Student Grading PHP - CCBD </title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="img/favicon2.jpeg" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style2.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>
<body class="bg-light">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
                        <marquee class="mt-3" onMouseOver="this.stop()" style="color: #e92f33;" onMouseOut="this.start()">This is a Code Camp BD's free source code for educational use only. It can never be used for commercial purposes. Don't forget to take <a target="_blank" href="https://www.youtube.com/@codecampbdofficial">Code Camp BD</a> permission if needed! to contact - <a target="_blank" href="https://www.facebook.com/dev.mhrony">MH RONY</a> </marquee>

            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <!-- <img class="align-content" src="images/staffGreen.png" alt=""> -->
                    </a>
                </div>
                <div class="login-form">
                    <form method="Post" Action="">
                            <?php echo $errorMsg; ?>
                        <strong><h2 align="center">Student Login</h2></strong><hr>
                        <div class="form-group">
                            <label>Student ID No.</label>
                            <input type="text" name="matricNo" Required class="form-control" placeholder="Matric Number">
                        </div>
                            <!--  Author Name: MH RONY.
                                GigHub Link: https://github.com/dev-mhrony
                                Facebook Link:https://www.facebook.com/dev.mhrony
                                Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
                                for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com  
                                Visit My Website : developerrony.com 
                            -->
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" Required class="form-control" placeholder="Password">
                        </div>
                        <div class="checkbox">
                           <label class="pull-left">
                                <a href="index.php">Go Back</a>
                            </label>
                            <label class="pull-right">
                                <a href="#">Forgot Password?</a><!-- **Watch more poroject to visit Our Youtube Channel - https://youtube.com/playlist?list=PLwC8LFb2Ws3K0SBdiBJjyvGpqHnEyiRK6&si=o03aWP1yCBIR9jcv **-->
                            </label>
                        </div>
                        <br><!-- **Watch more poroject to visit Our Youtube Channel - https://youtube.com/playlist?list=PLwC8LFb2Ws3K0SBdiBJjyvGpqHnEyiRK6&si=o03aWP1yCBIR9jcv **-->
                        <button type="submit" name="login" class="btn btn-success btn-flat m-b-30 m-t-30">Log in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
  <!--  Author Name: MH RONY.
        GigHub Link: https://github.com/dev-mhrony
        Facebook Link:https://www.facebook.com/dev.mhrony
        Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
        for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com  
        Visit My Website : developerrony.com 
  -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>
                <!-- =======================================================
              * Project Name: Student Gaide - CCBD
              * Project URL: 
              * Author: Code Camp BD
              * Developer: MH RONY
              * License: Free to Use just Educational Perpus
            ======================================================== -->

</body>
</html>
