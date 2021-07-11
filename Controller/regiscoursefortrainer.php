<!DOCTYPE html>
<html>
<head>
	<title>Trainer</title>
    <link rel="stylesheet" type="text/css" href="addstyle.css">
</head>
<style>
    
</style>
<body>
<?php 
require_once("db.php");
if(isset($_POST['1']) && isset($_POST['2']))
{
    $one = $_POST['1'];
    $two = $_POST['2'];
    $sql = "Insert Into registrainer values('".$one."', '".$two."')";
    $conn = new mysqli($hostname,$username,$password,$dbname,$port);
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo("ABC");
        die();
    }else{
        header("Location:trainer.php");
    }
}
?>
<div class="navbar">
    <a href="#">WELCOME TO PAGE FOR TRAINER</a>
    <a href="loginform1.php">LOG OUT</a>
</div>
<div class="sidenav">
    <br><br><br>
    <a href="trainer.php" style="margin-left:50px;">VIEW ALL TRAINER</a>
    <br><br>
    <a href="trainer1.php" style="margin-left:50px;">VIEW ALL COURSE</a>
    <br><br>
    <a href="regiscoursefortrainer.php" style="margin-left:20px;">COURSE REGISTRATION</a>
    <br><br>
</div>
<div class="main" style="width: 1600px;">
<h1 style="text-align: center;">REGISTER FOR THE SUBJECT WANT TO TEACH</h1>
<br><br><br>
<form method="POST" style="width: 1600px"> 
    <table style="margin-left: auto;margin-right: auto;width: 500px;">
    <tr>
        <td>Trainer name:</td>
        <td><input type="text" name="1" style="width: 100%;height: 25px"></td>
    </tr>
    <tr>
        <td>Course name:</td>
        <td>
            <select style="width: 100%;height: 30px" name="2">
            <?php 
            $sql = "Select * From course";
            $rows = query($sql);
            foreach ($rows as $r) 
            {
                ?>
                    <option value="<?=$r[1]?>"><?=$r[1]?></option>
                <?php               
            }
            ?>
            </select>
        </td>    
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="submit" name ="submit" value = "SUBMIT" style="height: 30px;width: 100px;background-color: blue;color: white;">
        </td>
    </tr>
</table>
</div>
</body>
</html>