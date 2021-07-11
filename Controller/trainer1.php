<!DOCTYPE html>
<html>
<head>
    <title>Trainer</title>
    <link rel="stylesheet" type="text/css" href="addstyle.css">
</head>
<body>
<body>
    <div class="navbar">
  <a href="#">WELCOM TO PAGE FOR TRAINER</a>
  <a href="loginform1.php">LOG OUT</a>
</div>
<div class="sidenav">
    <br><br><br>
    <a href="trainer.php" style="margin-left:50px;">VIEW ALL TRAINER</a>
    <br><br>
    <a href="trainer1.php" style="margin-left:50px;">VIEW ALL COURSE</a>
    <br><br>
    <a href="regiscoursefortrainer.php" style="margin-left:20px">COURSE REGISTRATION</a>
</div>
<div class="main" style="width: 1600px;">
<h1 style="text-align: center;">VIEW ALL COURSE'S INFORMATION SITE</h1>
<table border="1px" style="margin-left: auto;margin-right: auto;">
    <tr>
    <th>ID</th>
    <th>Course name</th>
    <th>Course category</th>
    <th>Course desciption</th>
    <th>Trainer</th>
    </tr>
<?php
    require_once('./db.php');
    $sql = "Select * From course";
    $rows = query($sql);
    foreach($rows as $r)
    {

        ?>
        <tr>
            <td align="center"><?=$r[0]?></td>
            <td align="center"><?=$r[1]?></td>
            <td align="center"><?=$r[2]?></td>
            <td align="center"><?=$r[3]?></td>
            <td align="center"><?=$r[4]?></td><br>
            
            
            </td>
        </tr>

        <?php
    }
?>
</table>