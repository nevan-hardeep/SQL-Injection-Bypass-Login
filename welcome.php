<?php

session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="assets/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
        body {
  background-image: url('white.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
    </style>
</head>

<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome</h1>
        <h2> Welcome To The Clubs Of Our College VNRVJIET , Here WE Have Cultural Clubs And Students Chapters<h2>
        <img src="vnrthing.jpg" alt="no image found">
            <h3>Student Chapters</h3>
            
                <li>Computer Society of india</li>
                <li>IEEE</li>
                <li>IEI</li>
                <li>IUCEE</li>
                <li>ISTE</li>
                <li>ISOI</li>
                <li>ASME</li>
                <li>IETE</li>
                <li>ACM</li>
                <li>SAE</li>
            <h3>Cultural Clubs</h3>
                <li>LiveWire-Dance Club</li>
                <li>Crescendo-Music Club</li>
                <li>Vjteatro-Short Film Club</li>
                <li>Stentorian- English Literary Club</li>
                <li>Vignana Jyoti Sahiti Vanam - Telugu Literary Club</li>
                <li>Dramatrix - Drama Club</li>
                <li> Art Of Living</li>
            <h3> Social clubs</h3>
            
                <li>National service scheme</li>
                <li>Enterpreneurship Development Cell</li>
                <li>student force</li>
            
    </div>
    <p>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
</body>
</html>