<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="addstyle.css">
</head>
<body>
<?php 
require_once('./db.php');
if(isset($_GET['UseID']) && isset($_GET['Username']) && isset($_GET['Password']) && isset($_GET['Usertype']))
{
    $UseID = $_GET['UseID'];
    $Username = $_GET['Username'];
    $Password = md5($_GET['Password']);
    $Usertype = $_GET['Usertype'];
    $sql = "Update account set Username='".$Username."', Password='".$Password."', Usertype='".$Usertype."' where UseID='".$UseID."'";
    $result = execsql($sql);
    if (!$result) {
        echo("ABC");
        die();
    }else{
        header("Location:adminacc.php");
    }
}
?>
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
<h1 style="text-align: center;">MANAGE ACCOUNT SITE</h1>
<table border="1px" style="margin-left: auto;margin-right: auto;">
    <button class="button" type="submit"><a href="reacc1.php">Register</a></button>
    <tr>
    <th>ID</th>
    <th>User name</th>
    <th>Password</th>
    <th>Role</th>
    </tr>
<?php
    require_once('./db.php');
    $sql = "Select * From account";
    $rows = query($sql);
    for($i=0; $i<count($rows); $i++)
    {
?>
        <tr>
            <td align="center"><?=$rows[$i][0]?></td>
            <td align="center"><?=$rows[$i][1]?></td>
            <td align="center"><?=$rows[$i][2]?></td>
            <td align="center"><?=$rows[$i][3]?></td>
            <td><a href="adminacc.php?EditAcc=<?=$rows[$i][0]?>">Edit</a></td>
            <td><a href="adminacc.php?DeleteAcc=<?=$rows[$i][0]?>">Delete</a></td>
        </tr>
<?php
    }
?>
</table>
<br><br><br>
<?php
require_once("db.php");
if(isset($_GET['DeleteAcc']))
{
    $useID = $_GET['DeleteAcc'];
    $sql = "delete from account where UseID = '" . $useID . "'";
    $conn = new mysqli($hostname,$username,$password,$dbname,$port);
    $result = mysqli_query($conn, $sql); 
    if($result)
    {
        header("Location:adminacc.php");
    }
}
?>
<?php
require_once("db.php");
    if(isset($_GET['EditAcc']))
    {
    $useID = $_GET['EditAcc'];
    $sql = "select * from account where UseID='".$useID."'";
    $rows = query($sql);
?>
<form action="" method="GET" style="width: 1600px"> 
    <table style="margin-left: auto;margin-right: auto;width: 500px;">
     <tr>
         <td>UseID</td>
         <td><input type="hidden" name="UseID" value = "<?=$rows[0][0]?>"></td>
     </tr> 
     <tr>
         <td>Username</td>
         <td><input type="text" name="Username" value = "<?=$rows[0][1]?>"></td>
     </tr>
    <tr>
         <td>Password</td>
         <td><input type="password" name="Password" value = "<?=$rows[0][2]?>"></td>
    </tr>
    
    <tr>
         <td>Usertype</td>
         <td><input type="text" name="Usertype" value = "<?=$rows[0][3]?>"></td>
    </tr>
    
    <tr>
        <td></td>
        <td><input type="submit" name ="save" value = "SAVE" style="height: 30px;width: 100px;background-color: blue;color: white;">
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