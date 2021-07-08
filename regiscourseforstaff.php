<!DOCTYPE html>
<html>
<head>
	<title>Staff</title>
    <link rel="stylesheet" type="text/css" href="addstyle.css">
</head>
<style>
    
</style>
<body>
<div class="navbar">
  <a href="#">WELCOM TO PAGE FOR STAFF</a>
  <a href="loginform1.php">LOG OUT</a>
</div>
<div class="sidenav">
    <br>
    <a href="managetraineeforstaff.php">MANAGE TRAINEE</a>
    <br><br>
    <a href="managetrainerforstaff.php">MANAGE TRAIER</a>
    <br><br>
    <a href="managecourseforstaff.php">MANAGE COURSE</a>
    <br><br>
    <a href="regiscourseforstaff.php">REGISTRATION NOTICE</a>
</div>
<div class="main" style="width: 1600px;">
<h1 style="text-align: center;">REGISTRATION NOTICES</h1>
<br><br><br>
<table style="margin-left: auto;margin-right: auto;" border="1px">
<h3 style="text-align: center">Announcement of trainer registration for teaching</h3>
    <tr>
        <td style="text-align: center;font-weight: bold">Trainer name</td>
        <td style="text-align: center;font-weight: bold">Course name</td>
    </tr>
    <?php
    require_once('./db.php');
    $sql = "Select * From registrainer";
    $rows = query($sql);
    for($i=0; $i<count($rows); $i++)
    {
?>
        <tr>
            <td align="center"><?=$rows[$i][0]?></td>
            <td align="center"><?=$rows[$i][1]?></td>
        </tr>
<?php
    }
?>
</table>
<br><br><br><br><br>
<table style="margin-left: auto;margin-right: auto;" border="1px"> 
<h3 style="text-align: center">Announcement of trainee registration for learning</h3>
    <tr>
        <td style="text-align: center;font-weight: bold">Trainer name</td>
        <td style="text-align: center;font-weight: bold">Course name</td>
        
    </tr>
    <?php
    require_once('./db.php');
    $sql = "Select * From registrainee";
    $rows = query($sql);
    for($i=0; $i<count($rows); $i++)
    {
?>
        <tr>
            <td align="center"><?=$rows[$i][0]?></td>
            <td align="center"><?=$rows[$i][1]?></td>
        </tr>
<?php
    }
?>
</table>
</div>
</body>
</html>