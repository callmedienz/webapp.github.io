<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
    <link rel="stylesheet" type="text/css" href="addstyle.css">
</head>
<style>
    
</style>
<body>
<div class="navbar">
  <a href="#">WELCOM TO PAGE FOR ADMIN</a>
  <a href="loginform1.php">LOG OUT</a>
</div>
<div class="sidenav">
<br>
    <a href="adminstaff.php">MANAGE STAFF</a>
    <br><br>
    <a href="admintrainer.php">MANAGE TRAINER</a>
    <br><br>
    <a href="adminacc.php">MANAGE ACCOUNT</a>
</div>
<div class="main" style="width: 1600px;">
<h1 style="text-align: center;">MANAGE STAFF SITE</h1>
<table border="1px" style="margin-left: auto;margin-right: auto;">
    <button class="button" type="submit"><a href="registerforadmin.php">Register</a></button>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Password</th>
    </tr>
    <?php 
require_once('./db.php');
if(isset($_GET['StaffID']) && isset($_GET['StaffName']) && isset($_GET['StaffEmail']) && isset($_GET['StaffPhone'])&& isset($_GET['StaffPassword']))
{
    $StaffID = $_GET['StaffID'];
    $StaffName = $_GET['StaffName'];
    $StaffEmail = $_GET['StaffEmail'];
    $StaffPhone = $_GET['StaffPhone'];
    $StaffPassword = md5($_GET['StaffPassword']);
    $sql = "Update staff set StaffName='".$StaffName."', StaffEmail='".$StaffEmail."', StaffPhone='".$StaffPhone."', StaffPassword='".$StaffPassword."' where StaffID='".$StaffID."'";
    $result = execsql($sql);
    if (!$result) {
        echo("ABC");
        die();
    }else{
        header("Location:adminstaff.php");
    }
}
?>
<?php
    require_once('./db.php');
    $sql = "Select * From staff";
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
            <td><a href="adminstaff.php?EditStaff=<?=$r[0]?>">Edit</a></td>
            <td><a href="adminstaff.php?Deleteid=<?=$r[0]?>">Delete</a></td>
        </tr>
        <?php
    }
?>
</table>
<?php
require_once("db.php");

if(isset($_GET['Deleteid']))
{
    $StaffID = $_GET['Deleteid'];
    $sql = "delete from staff where StaffID = '" . $StaffID . "'";
    $result = execsql($sql);
    if($result)
    {
        header("Location: adminstaff.php");
    }
    else
    {
        echo"Sql statement fail";
    }

}
?>

<?php
    if(isset($_GET['EditStaff']))
    {
    $StaffID = $_GET['EditStaff'];
    $sql = "select * from staff where StaffID='".$StaffID."'";
    $rows = query($sql);
?>
<form action="" method="GET" style="width: 1600px"> 
    <table style="margin-left: auto;margin-right: auto;width: 500px;">
     <tr>
         <td>ID</td>
         <td><input type="hidden" name="StaffID" value = "<?=$rows[0][0]?>"></td>
     </tr> 
     <tr>
         <td>Name</td>
         <td><input type="text" name="StaffName" value = "<?=$rows[0][1]?>"></td>
     </tr>
    <tr>
         <td>Email</td>
         <td><input type="text" name="StaffEmail" value = "<?=$rows[0][2]?>"></td>
    </tr>
    
    <tr>
         <td>Phone</td>
         <td><input type="text" name="StaffPhone" value = "<?=$rows[0][3]?>"></td>
    </tr>
    <tr>
         <td>Password</td>
         <td><input type="password" name="StaffPassword" value = "<?=$rows[0][4]?>"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name ="save" value = "save" style="height: 30px;width: 100px;background-color: blue;color: white;">
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