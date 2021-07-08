<!DOCTYPE html>
<html>
<head>
    <title>Staff</title>
    <link rel="stylesheet" type="text/css" href="addstyle.css">
</head>
<body>
<body>
<?php 
require_once('db.php');
if(isset($_GET['TraineeID']) && isset($_GET['TraineeName']) && isset($_GET['TraineeEmail']) && isset($_GET['TraineePhone']) && isset($_GET['BirthOfDate']) && isset($_GET['TraineeAge']) && isset($_GET['TraineeLanguage']) && isset($_GET['TraineeTOEIC']) && isset($_GET['TraineeEx']) && isset($_GET['TraineeClass']) && isset($_GET['TraineeLocation']) && isset($_GET['TraineePassword']))
{
    $TraineeID = $_GET['TraineeID'];
    $TraineeName = $_GET['TraineeName'];
    $TraineeEmail = $_GET['TraineeEmail'];
    $TraineePhone = $_GET['TraineePhone'];
    $BirthOfDate = $_GET['BirthOfDate'];
    $TraineeAge = $_GET['TraineeAge'];
    $TraineeLanguage = $_GET['TraineeLanguage'];
    $TraineeTOEIC = $_GET['TraineeTOEIC'];
    $TraineeEx = $_GET['TraineeEx'];
    $TraineeClass = $_GET['TraineeClass'];
    $TraineeLocation = $_GET['TraineeLocation'];
    $TraineePassword = md5($_GET['TraineePassword']);
    $sql = "Update trainee set TraineeName='".$TraineeName."', TraineeEmail='".$TraineeEmail."', BirthOfDate='".$BirthOfDate."', Age=".$TraineeAge.", Language='".$TraineeLanguage."', TOEIC=".$TraineeTOEIC.", Experience='".$TraineeEx."', Class='".$TraineeClass."', Location='".$TraineeLocation."', TraineePhone=".$TraineePhone.", TraineePassword='".$TraineePassword."' where TraineeID='".$TraineeID."'";
    $result = execsql($sql);
    if (!$result) {
        echo("ABC");
        die();
    }else{
        header("Location:managetraineeforstaff.php");
    }
}
?>
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
<h1 style="text-align: center;">MANAGE TRAINEE SITE</h1>
<table border="1px" style="margin-left: auto;margin-right: auto;">
    <button class="button" type="submit"><a href="retrainee.php">Register</a></button>
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
            <td><a href="managetraineeforstaff.php?EditTrainee=<?=$rows[$i][0]?>">Edit</a></td> 
            <td><a href="managetraineeforstaff.php?DeleteTrainee=<?=$rows[$i][0]?>">Delete</a></td>
        </tr>
<?php
    }
?>
</table>
<?php
require_once("db.php");
if(isset($_GET['DeleteTrainee']))
{
    $traineeID = $_GET['DeleteTrainee'];
    $sql = "delete from trainee where TraineeID = '" . $traineeID . "'";
    $conn = new mysqli($hostname,$username,$password,$dbname,$port);
    $result = mysqli_query($conn, $sql);
    if($result)
    {
        header("Location: managetraineeforstaff.php");
    }
    else
    {
        echo"Sql statement fail";
    }
}
?>
<?php
    if(isset($_GET['EditTrainee']))
    {
    $traineeID = $_GET['EditTrainee'];
    $sql = "select * from trainee where TraineeID='".$traineeID."'";
    $rows = query($sql);
?>
<form method="GET" style="width: 1600px"> 
    <table style="margin-left: auto;margin-right: auto;width: 500px;">
     <tr>
         <td>ID</td>
         <td><input type="hidden" name="TraineeID" value = "<?=$rows[0][0]?>" style="width: 100%"></td>
     </tr> 
     <tr>
         <td>Trainee Name</td>
         <td><input type="text" name="TraineeName" value = "<?=$rows[0][1]?>" style="width: 100%"></td>
     </tr>
     <tr>
         <td>Trainee Email</td>
         <td><input type="text" name="TraineeEmail" value = "<?=$rows[0][2]?>" style="width: 100%"></td>
     </tr>
     <tr>
         <td>Trainee Phone</td>
         <td><input type="text" name="TraineePhone" value = "<?=$rows[0][3]?>" style="width: 100%"></td>
     </tr>
     <tr>
         <td>Birth of Date</td>
         <td><input type="text" name="BirthOfDate" value = "<?=$rows[0][4]?>" style="width: 100%"></td>
     </tr>
     <tr>
         <td>Age</td>
         <td><input type="text" name="TraineeAge" value = "<?=$rows[0][5]?>" style="width: 100%"></td>
     </tr>
     <tr>
         <td>Language</td>
         <td><input type="text" name="TraineeLanguage" value = "<?=$rows[0][6]?>" style="width: 100%"></td>
     </tr>
     <tr>
         <td>TOEIC</td>
         <td><input type="text" name="TraineeTOEIC" value = "<?=$rows[0][7]?>" style="width: 100%"></td>
     </tr>
     <tr>
         <td>Experience</td>
         <td><input type="text" name="TraineeEx" value = "<?=$rows[0][8]?>" style="width: 100%"></td>
     </tr>
    <tr>
         <td>Class</td>
         <td><input type="text" name="TraineeClass" value = "<?=$rows[0][9]?>" style="width: 100%"></td>
    </tr>
    
    <tr>
         <td>Location</td>
         <td><input type="text" name="TraineeLocation" value = "<?=$rows[0][10]?>" style="width: 100%"></td>
    </tr>
    <tr>
         <td>Password</td>
         <td><input type="password" name="TraineePassword" value = "<?=$rows[0][11]?>" style="width: 100%"></td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="submit" name ="save" value = "SAVE" style="height: 30px;width: 100px;background-color: blue;color: white;">
        </td>
    </tr>
</table>
   </form> 
<?php
    }
else
    {
?>
<?php 
    }
?>
</div>
</body>
</html>
