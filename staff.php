<!DOCTYPE html>
<html>
<head>
    <title>Staff</title>
    <link rel="stylesheet" type="text/css" href="addstyle.css">
</head>
<body>
<body>
<div class="navbar">
  <a href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
</div>
<div class="sidenav">
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>
<div class="main">
<h1 style="text-align: center;">BACBABCSKJCB</h1>
<table border="1px">
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
            <td><a href="staff.php?EditTrainee=<?=$rows[$i][0]?>">Edit</a></td> 
            <td><a href="staff.php?DeleteTrainee=<?=$rows[$i][0]?>">Delete</a></td>
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
    $result = execsql($sql);
    if($result)
    {
        header("Location: staff.php");
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
<form action="savetraineeforstaff.php" method="GET"> 
    <table>
     <tr>
         <td>ID</td>
         <td><input type="text" name="TraineeID" value = "<?=$rows[0][0]?>"></td>
     </tr> 
     <tr>
         <td>Trainee Name</td>
         <td><input type="text" name="TraineeName" value = "<?=$rows[0][1]?>"></td>
     </tr>
     <tr>
         <td>Trainee Email</td>
         <td><input type="text" name="TraineeEmail" value = "<?=$rows[0][2]?>"></td>
     </tr>
     <tr>
         <td>Trainee Phone</td>
         <td><input type="text" name="TraineePhone" value = "<?=$rows[0][3]?>"></td>
     </tr>
     <tr>
         <td>Birth of Date</td>
         <td><input type="text" name="BirthOfDate" value = "<?=$rows[0][4]?>"></td>
     </tr>
     <tr>
         <td>Age</td>
         <td><input type="text" name="TraineeAge" value = "<?=$rows[0][5]?>"></td>
     </tr>
     <tr>
         <td>Language</td>
         <td><input type="text" name="TraineeLanguage" value = "<?=$rows[0][6]?>"></td>
     </tr>
     <tr>
         <td>TOEIC</td>
         <td><input type="text" name="TraineeTOEIC" value = "<?=$rows[0][7]?>"></td>
     </tr>
     <tr>
         <td>Experience</td>
         <td><input type="text" name="TraineeEx" value = "<?=$rows[0][8]?>"></td>
     </tr>
    <tr>
         <td>Class</td>
         <td><input type="text" name="TraineeClass" value = "<?=$rows[0][9]?>"></td>
    </tr>
    
    <tr>
         <td>Location</td>
         <td><input type="text" name="TraineeLocation" value = "<?=$rows[0][10]?>"></td>
    </tr>
    <tr>
         <td>Password</td>
         <td><input type="text" name="TraineePassword" value = "<?=$rows[0][11]?>"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name ="save" value = "save"></td>

    </tr>
</table>
   </form> 
    <?php
    }
else
{
?>
    <form action="savetraineeforstaff.php" method="GET"> 
    <table>
    <tr>
         <td>ID</td>
         <td><input type="text" name="id"></td>
     </tr> 
     <tr>
         <td>Trainee Name</td>
         <td><input type="text" name="name"></td>
     </tr>
     <tr>
         <td>Trainee Email</td>
         <td><input type="text" name="email"></td>
     </tr>
     <tr>
         <td>Trainee Phone</td>
         <td><input type="text" name="phone"></td>
     </tr>
     <tr>
         <td>Birth of Date</td>
         <td><input type="text" name="birth"></td>
     </tr>
     <tr>
         <td>Age</td>
         <td><input type="text" name="age"></td>
     </tr>
     <tr>
         <td>Language</td>
         <td><input type="text" name="language"></td>
     </tr>
     <tr>
         <td>TOEIC</td>
         <td><input type="text" name="toeic"></td>
     </tr>
     <tr>
         <td>Experience</td>
         <td><input type="text" name="ex"></td>
     </tr>
    <tr>
         <td>Class</td>
         <td><input type="text" name="class"></td>
    </tr>
    
    <tr>
         <td>Location</td>
         <td><input type="text" name="location"></td>
    </tr>
    <tr>
         <td>Password</td>
         <td><input type="text" name="pass"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name ="save" value = "save">
            <input type="submit" name="add" value="add">
        </td>

    </tr>
</table>
</form>   
<?php   
}
?> 

<table border="1px">
    <h3>Trainer list</h3>
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
    foreach($rows as $r)
    {

        ?>
        <tr>
            <td align="center"><?=$r[0]?></td>
            <td align="center"><?=$r[1]?></td>
            <td align="center"><?=$r[2]?></td>
            <td align="center"><?=$r[3]?></td>
            <td align="center"><?=$r[4]?></td>
            <td align="center"><?=$r[5]?></td><br>
            <td><a href="staff.php?EditTrainer=<?=$r[0]?>">Edit</a></td> 
            <td><a href="staff.php?DeleteTrainer=<?=$r[0]?>">Delete</a></td>
        </tr>

        <?php
    }
?>
</table>
<?php
require_once("db.php");

if(isset($_GET['DeleteTrainer']))
{
    $TrainID = $_GET['DeleteTrainer'];
    $sql = "delete from trainer where TrainerID = '" . $TrainID . "'";
    $result = execsql($sql);
    if($result)
    {
        header("Location:staff.php");
    }
}
?>

<?php
if(isset($_GET['EditTrainer']))
{
    $TrainID = $_GET['EditTrainer'];
    $sql = "select * from trainer where TrainerID='".$TrainID."'";
    $rows = query($sql);
?>
<form action="savetrainerforstaff.php" method="GET"> 
    <table>
     <tr>
         <td>ID</td>
         <td><input type="text" name="TrainerID" value = "<?=$rows[0][0]?>"></td>
     </tr> 
     <tr>
         <td>Name</td>
         <td><input type="text" name="TrainerName" value = "<?=$rows[0][1]?>"></td>
     </tr>
    <tr>
         <td>Email</td>
         <td><input type="text" name="TrainerEmail" value = "<?=$rows[0][2]?>"></td>
    </tr>
    <tr>
         <td>Phone</td>
         <td><input type="text" name="TrainerPhone" value = "<?=$rows[0][3]?>"></td>
    </tr>
     <tr>
         <td>Workplace</td>
         <td><input type="text" name="TrainerWP" value = "<?=$rows[0][4]?>"></td>
    </tr>
    <tr>
         <td>Password</td>
         <td><input type="text" name="TrainerPassword" value = "<?=$rows[0][5]?>"></td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="submit" name ="save" value = "save">
            <input type="submit" name="add" value="add">
        </td>

    </tr>
</table>
   </form> 
<?php
}
else
{
?>
    <form action="savetrainerforstaff.php" method="GET"> 
    <table>
     <tr>
         <td>ID</td>
         <td><input type="text" name="id" value = ""></td>
     </tr> 
     <tr>
         <td>Name</td>
         <td><input type="text" name="name" value = ""></td>
     </tr>
    <tr>
         <td>Email</td>
         <td><input type="text" name="email" value = ""></td>
    </tr>
    
    <tr>
         <td>Phone</td>
         <td><input type="text" name="phone" value = ""></td>
    </tr>
    <tr>
         <td>Workplace</td>
         <td><input type="text" name="wp" value = ""></td>
    </tr>
    <tr>
         <td>Password</td>
         <td><input type="text" name="pass" value = ""></td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="submit" name ="save" value = "save">
            <input type="submit" name="add" value="add">
        </td>


    </tr>
</table>
</form>   
<?php   
}
?>

<table border="1px">
    <h3>Course list</h3>
    <button class="button" type="submit"><a href="recourseS.php">Register</a></button>
    <tr>
    <th>ID</th>
    <th>Course name</th>
    <th>Course category</th>
    <th>Course desciption</th>
    <th>Teacher</th>
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
            <td><a href="staff.php?Editid=<?=$r[0]?>">Edit</a></td> 
            <td><a href="staff.php?DeleteCourse=<?=$r[0]?>">Delete</a></td> 
            </td>
        </tr>

        <?php
    }
?>
</table>


<?php
require_once("db.php");
if(isset($_GET['DeleteCourse']))
{
    $courseID = $_GET['DeleteCourse'];
    $sql = "delete from course where CourseID = '" . $courseID . "'";
    $result = execsql($sql);
    if($result)
    {
        header("Location: staff.php");
    }
}
?>
<?php
    if(isset($_GET['EditCourse']))
    {
    $courseID = $_GET['EditCourse'];
    $sql = "select * from course where CourseID='".$courseID."'";
    $rows = query($sql);
?>
<form action="savecourseforstaff.php" method="GET"> 
    <table>
     <tr>
         <td>ID</td>
         <td><input type="text" name="CourseID" value = "<?=$rows[0][0]?>"></td>
     </tr> 
     <tr>
         <td>Name</td>
         <td><input type="text" name="CourseName" value = "<?=$rows[0][1]?>"></td>
     </tr>
    <tr>
         <td>Category</td>
         <td><input type="text" name="CourseCategory" value = "<?=$rows[0][2]?>"></td>
    </tr>
    
    <tr>
         <td>Description</td>
         <td><input type="text" name="CourseDescription" value = "<?=$rows[0][3]?>"></td>
    </tr>
    <tr>
         <td>Teacher</td>
         <td><input type="text" name="Teacher" value = "<?=$rows[0][4]?>"></td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="submit" name ="save" value = "save">
            <input type="submit" name="add" value="add">
        </td>

    </tr>
    </table>
</form> 
<?php
}
else
{
?>
<form action="savecourseforstaff.php" method="GET"> 
    <table>
     <tr>
         <td>ID</td>
         <td><input type="text" name="id"></td>
     </tr> 
     <tr>
         <td>Name</td>
         <td><input type="text" name="name"></td>
     </tr>
    <tr>
         <td>Category</td>
         <td><input type="text" name="cate"></td>
    </tr>
    
    <tr>
         <td>Description</td>
         <td><input type="text" name="des"></td>
    </tr>
    <tr>
         <td>Teacher</td>
         <td><input type="text" name="Teacher" value = ""></td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="submit" name ="save" value = "save">
            <input type="submit" name="add" value="add">
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