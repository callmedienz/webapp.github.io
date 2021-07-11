<!DOCTYPE html>
<html>
<head>
    <title>register</title>
    <link rel="stylesheet" type="text/css" href="restyle.css">
</head>
<body>
<ul>
  <li><a href="loginform1.php">Logout</a></li>
</ul>
    <?php
    require_once('db.php');
if(isset($_GET['TrainerID']) && isset($_GET['TrainerName']) && isset($_GET['TrainerEmail']) && isset($_GET['TrainerPhone']) && isset($_GET['TrainerWP'])&& isset($_GET['TrainerPassword']))
{
    $TrainID = $_GET['TrainerID'];
    $TrainName = $_GET['TrainerName'];
    $TrainEmail = $_GET['TrainerEmail'];
    $TrainPhone = $_GET['TrainerPhone'];
    $TrainWP = $_GET['TrainerWP'];
    $TrainPassword = md5($_GET['TrainerPassword']);
    $sql = "Insert into trainer values('".$TrainID."','".$TrainName."', '".$TrainEmail."', '".$TrainPhone."', '".$TrainWP."','".$TrainPassword."')";
    $result = execsql($sql);
    if (!$result) {
        echo("ABC");
        die();
    }else{
        header("Location:managetrainerforstaff.php");
    }
}
    ?>
    <form action="" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="TrainerID"><b>TrainerID</b></label><br>
    <input type="text" placeholder="TrainerID " name="TrainerID" required>
    <br>
    <label for="TrainerName"><b>TrainerName</b></label><br>
    <input type="text" placeholder="TrainerName " name="TrainerName" required>
    <br>
    <label for="TrainerEmail"><b>TrainerEmail</b></label><br>
    <input type="text" placeholder="TrainerEmail" name="TrainerEmail" required>
    <br>
    <label for="TrainerPhone"><b>TrainerPhone</b></label><br>
    <input type="text" placeholder="TrainerPhone" name="TrainerPhone" required>
    <br>
    <label for="TrainerWP"><b>TrainerWorkplace</b></label><br>
    <input type="text" placeholder="TrainerWP" name="TrainerWP" required>
    <br>
    <label for="TrainerPassword"><b>TrainerPassword</b></label><br>
    <input type="text" placeholder="TrainerPassword" name="TrainerPassword" required>
    <br>

      <button type="submit" class="signupbtn" name="save" value="submit">Sign Up</button>
    
  </div>
</form>


    
</body>
</html>