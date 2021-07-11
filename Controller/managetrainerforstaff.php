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
if(isset($_GET['TrainerID']) && isset($_GET['TrainerName']) && isset($_GET['TrainerEmail']) && isset($_GET['TrainerPhone'])&& isset($_GET['TrainerPassword']))
{
    $TrainID = $_GET['TrainerID'];
    $TrainName = $_GET['TrainerName'];
    $TrainEmail = $_GET['TrainerEmail'];
    $TrainPhone = $_GET['TrainerPhone'];
    $TrainWP = $_GET['TrainerWP'];
    $TrainPassword = md5($_GET['TrainerPassword']);
    $sql = "Update trainer set TrainerName='".$TrainName."', TrainerEmail='".$TrainEmail."', TrainerPhone='".$TrainPhone."', TrainerWorkplace='".$TrainWP."' , TrainerPassword='".$TrainPassword."' where TrainerID='".$TrainID."'";
    $result = execsql($sql);
    if (!$result) {
        echo("ABC");
        die();
    }else{
        header("Location:managetrainerforstaff.php");
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
<h1 style="text-align: center;">MANAGE TRAINER SITE</h1>
<table border="1px" style="margin-left: auto;margin-right: auto;">
    <button class="button" type="submit"><a href="retrainerS.php">Register</a></button>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Workplace</th>
    <th>Password</th>
    </tr>
<?php
    require_once('./db.php');
    $sql = "Select * From trainer";
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
            <td align="center"><?=$rows[$i][5]?></td><br>
            <td><a href="managetrainerforstaff.php?EditTrainer=<?=$rows[$i][0]?>">Edit</a></td> 
            <td><a href="managetrainerforstaff.php?DeleteTrainer=<?=$rows[$i][0]?>">Delete</a></td>
        </tr>

<?php
    }
?>
</table>
<br><br><br>
<?php
require_once("db.php");
if(isset($_GET['DeleteTrainer']))
{
    $trainerID = $_GET['DeleteTrainer'];
    $sql = "delete from trainer where TrainerID = '" . $trainerID . "'";
    $conn = new mysqli($hostname,$username,$password,$dbname,$port);
    $result = mysqli_query($conn, $sql);
    if($result)
    {
        header("Location: managetrainerforstaff.php");
    }
    else
    {
        echo"Sql statement fail";
    }
}
?>
<?php
if(isset($_GET['EditTrainer']))
    {
    $trainerID = $_GET['EditTrainer'];
    $sql = "select * from trainer where TrainerID='".$trainerID."'";
    $rows = query($sql);
?>
<form method="GET" style="width: 1600px"> 
    <table style="margin-left: auto;margin-right: auto;width: 500px;">
     <tr>
         <td>ID</td>
         <td><input type="hidden" name="TrainerID" value = "<?=$rows[0][0]?>" style="width: 100%"></td>
     </tr> 
     <tr>
         <td>Name</td>
         <td><input type="text" name="TrainerName" value = "<?=$rows[0][1]?>" style="width: 100%"></td>
     </tr>
    <tr>
         <td>Email</td>
         <td><input type="text" name="TrainerEmail" value = "<?=$rows[0][2]?>" style="width: 100%"></td>
    </tr>
    <tr>
         <td>Phone</td>
         <td><input type="text" name="TrainerPhone" value = "<?=$rows[0][3]?>" style="width: 100%"></td>
    </tr>
     <tr>
         <td>Workplace</td>
         <td><input type="text" name="TrainerWP" value = "<?=$rows[0][4]?>" style="width: 100%"></td>
    </tr>
    <tr>
         <td>Password</td>
         <td><input type="password" name="TrainerPassword" value = "<?=$rows[0][5]?>" style="width: 100%"></td>
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
?>
</div>
</body>
</html>