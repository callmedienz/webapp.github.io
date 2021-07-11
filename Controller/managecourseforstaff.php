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
if(isset($_GET['CourseID']) && isset($_GET['CourseName']) && isset($_GET['CourseCategory']) && isset($_GET['CourseDescription']) && isset($_GET['Trainer']))
{
    $CourseID = $_GET['CourseID'];
    $CourseName = $_GET['CourseName'];
    $Category = $_GET['CourseCategory'];
    $Description = $_GET['CourseDescription'];
    $Trainer = $_GET['Trainer'];
    $sql = "Update course set CourseName='".$CourseName."', CousreCate='".$Category."', CourseDes='".$Description."', Trainer='".$Trainer."' where CourseID='".$CourseID."'";
    $result = execsql($sql);
    if (!$result) {
        echo("ABC");
        die();
    }else{
        header("Location:managecourseforstaff.php");
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
<h1 style="text-align: center;">MANAGE COURSE SITE</h1>
<table border="1px" style="margin-left: auto;margin-right: auto;">
    <button class="button" type="submit"><a href="recourseS.php">Register</a></button>
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
    for($i=0; $i<count($rows); $i++)
    {
?>
        <tr>
            <td align="center"><?=$rows[$i][0]?></td>
            <td align="center"><?=$rows[$i][1]?></td>
            <td align="center"><?=$rows[$i][2]?></td>
            <td align="center"><?=$rows[$i][3]?></td>
            <td align="center"><?=$rows[$i][4]?></td><br>
            <td><a href="managecourseforstaff.php?EditCourse=<?=$rows[$i][0]?>">Edit</a></td> 
            <td><a href="managecourseforstaff.php?DeleteCourse=<?=$rows[$i][0]?>">Delete</a></td> 
            </td>
        </tr>

<?php
    }
?>
</table>
<br><br><br>
<?php
require_once("db.php");
if(isset($_GET['DeleteCourse']))
{
    $courseID = $_GET['DeleteCourse'];
    $sql = "delete from course where CourseID = '" . $courseID . "'";
    $conn = new mysqli($hostname,$username,$password,$dbname,$port);
    $result = mysqli_query($conn, $sql);
    if($result)
    {
        header("Location: managecourseforstaff.php");
    }
}
?>
<?php
require_once("db.php");
if(isset($_GET['EditCourse']))
    {
    $courseID = $_GET['EditCourse'];
    $sql = "select * from course where CourseID='".$courseID."'";
    $rows = query($sql);
?>
<form method="GET" style="width: 1600px"> 
    <table style="margin-left: auto;margin-right: auto;width: 500px;">
     <tr>
         <td>ID</td>
         <td><input type="hidden" name="CourseID" value = "<?=$rows[0][0]?>" style="width: 100%"></td>
     </tr> 
     <tr>
         <td>Name</td>
         <td><input type="text" name="CourseName" value = "<?=$rows[0][1]?>" style="width: 100%"></td>
     </tr>
    <tr>
         <td>Category</td>
         <td><input type="text" name="CourseCategory" value = "<?=$rows[0][2]?>" style="width: 100%"></td>
    </tr>
    
    <tr>
         <td>Description</td>
         <td><input type="text" name="CourseDescription" value = "<?=$rows[0][3]?>" style="width: 100%"></td>
    </tr>
    <tr>
         <td>Trainer</td>
         <td><input type="text" name="Trainer" value = "<?=$rows[0][4]?>" style="width: 100%"></td>
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