<!DOCTYPE html>
<html>
<head>
    <title>Staff</title>
    <link rel="stylesheet" type="text/css" href="addstyle.css">
</head>
<body>
<body>
<?php
require_once("db.php");
  if(isset($_POST['save']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $wp = $_POST['wp'];
    $pass = $_POST['pass'];
    $sql = "Insert Into trainer values('" . $id . "', '" . $name . "', '" . $email . "',".$phone.", '" . $wp . "','".$pass."')";
    $conn = new mysqli($hostname,$username,$password,$dbname,$port);
    $result = mysqli_query($conn, $sql);
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
	<br><br><br>
    <a href="managetraineeforstaff.php">MANAGE TRAINEE</a>
    <br><br>
    <a href="managetrainerforstaff.php">MANAGE TRAIER</a>
    <br><br>
    <a href="managecourseforstaff.php">MANAGE COURSE</a>
</div>
<div class="main" style="width: 1600px;">
<h1 style="text-align: center;">REGISTER NEW TRAINER</h1>
<br><br><br>
 <form method="POST" style="width: 1600px"> 
    <table style="margin-left: auto;margin-right: auto;width: 500px;">
     <tr>
         <td>ID</td>
         <td><input type="hidden" name="id" style="width: 100%"></td>
     </tr> 
     <tr>
         <td>Name</td>
         <td><input type="text" name="name" style="width: 100%"></td>
     </tr>
    <tr>
         <td>Email</td>
         <td><input type="text" name="email" style="width: 100%"></td>
    </tr>
    
    <tr>
         <td>Phone</td>
         <td><input type="text" name="phone" style="width: 100%"></td>
    </tr>
    <tr>
         <td>Workplace</td>
         <td><input type="text" name="wp" style="width: 100%"></td>
    </tr>
    <tr>
         <td>Password</td>
         <td><input type="password" name="pass" style="width: 100%"></td>
    </tr>
    <br><br>
    <tr>
        <td></td>
        <td>
            <input type="submit" name ="save" value = "SAVE" style="height: 30px;width: 100px;background-color: blue;color: white;">
        </td>
    </tr>
</table>
</form>   
</div>
</body>
</html>