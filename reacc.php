<!DOCTYPE html>
<html>
<head>
    <title>register</title>
    <link rel="stylesheet" type="text/css" href="restyle.css">
</head>
<body>
<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
  <li><a href="loginform1.php">Logout</a></li>
</ul>
    <?php
 require_once('db.php');
if(isset($_GET['UserID']) && isset($_GET['Username'])&& isset($_GET['Password']) && isset($_GET['Usertype']) )
{
    $UserID = $_GET['UserID'];
    $Username = $_GET['Username'];
    $Password = md5($_GET['Password']);
    $Usertype = $_GET['Usertype'];
    $sql = "Insert into course values('".$UserID."','".$Username."','".$Password."', '".$Usertype."' )";
    $result = execsql($sql);
    if (!$result) {
        echo("ABC");
        die();
    }else{
        header("Location:adminacc.php");
    }
}
    ?>
    
<form action="" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="UserID"><b>UserID</b></label><br>
    <input type="text" placeholder="UserID" name="UserID" required>
    <br>
    <label for="Username"><b>Username</b></label><br>
    <input type="text" placeholder="Username " name="Username" required>
    <br>
    <label for="Password"><b>Password</b></label><br>
    <input type="text" placeholder="Password " name="Password" required>
    <br>
    <label for="Usertype"><b>Usertype</b></label><br>
    <input type="text" placeholder="Usertype" name="Usertype" required>
    <br>
    
    

      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn" name="save" value="submit">Sign Up</button>
    
  </div>
</form>

    
</body>
</html>