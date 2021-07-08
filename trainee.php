<!DOCTYPE html>
<html>
<head>
    <title>Trainee</title>
    <link rel="stylesheet" type="text/css" href="addstyle.css">
</head>
<body>
<body>
<div class="navbar">
  <a href="#">HWELCOM TO PAGE FOR TRAINEE</a>
  <a href="loginform1.php">LOG OUT</a>
</div>
<div class="sidenav">
    <br><br><br>
    <a href="trainee.php" style="margin-left:50px;">VIEW ALL TRAINEE</a>
    <br><br>
    <a href="trainee1.php" style="margin-left:50px;">VIEW ALL COURSE</a>
    <br><br>
    <a href="regiscoursefortrainee.php" style="margin-left:20px;">COURSE REGISTRATION</a>
    <br><br>
</div>
<div class="main" style="width: 1600px;">
<h1 style="text-align: center;">VIEW ALL TRAINEE'S INFORMATION SITE</h1>
<div class="trainee">
<table border="1px" style="margin-left: auto;margin-right: auto;">
    
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Birth of Date</th>
    <th>Age</th>
    <th>Language</th>
    <th>TOEIC</th>
    <th>Experience</th>
    <th>Class</th>
    <th>Location</th>
    <th>Password</th>
    </tr>
<?php
    require_once('./db.php');
    $sql = "Select * From trainee";
    $rows = query($sql);
    for($i=0; $i<count($rows); $i++)
    {

        ?>
        <tr>
            <td align="center"><?=$rows[$i][0]?></td>
            <td align="center"><?=$rows[$i][1]?></td>
            <td align="center"><?=$rows[$i][2]?></td>
            <td align="center"><?=$rows[$i][3]?></td>
            <td align="center"><?=$rows[$i][4]?></td>
            <td align="center"><?=$rows[$i][5]?></td>
            <td align="center"><?=$rows[$i][6]?></td>
            <td align="center"><?=$rows[$i][7]?></td>
            <td align="center"><?=$rows[$i][8]?></td>
            <td align="center"><?=$rows[$i][9]?></td>
            <td align="center"><?=$rows[$i][10]?></td>
            <td align="center"><?=$rows[$i][11]?></td><br>
            
        </tr>

        <?php
    }
?>



</div>

</body>
</html>