<!DOCTYPE html>
<html>
<head>
    <title>Trainee</title>
    <link rel="stylesheet" type="text/css" href="restyle.css">
</head>
<body>
<ul>
  <li><a href="loginform1.php">Logout</a></li>
</ul>
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
    $sql = "Insert into trainee values('".$TraineeID."','".$TraineeName."', '".$TraineeEmail."', ".$TraineePhone.", '".$BirthOfDate."', ".$TraineeAge.", '".$TraineeLanguage."', ".$TraineeTOEIC.", '".$TraineeEx."', '".$TraineeClass."', '".$TraineeLocation."', '".$TraineePassword."')";
    $result = execsql($sql);
    if (!$result) {
        echo("ABC");
        die();
    }else{
        header("Location:managetraineeforstaff.php");
    }
}
    ?>


<form action="" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="TraineeID"><b>TraineeID</b></label><br>
    <input type="text" placeholder="TraineeID " name="TraineeID" required>
    <br>
    <label for="TraineeName"><b>TraineeName</b></label><br>
    <input type="text" placeholder="TraineeName " name="TraineeName" required>
    <br>
    <label for="TraineeEmail"><b>TraineeEmail</b></label><br>
    <input type="text" placeholder="TraineeEmail" name="TraineeEmail" required>
    <br>
    <label for="TraineePhone"><b>TraineePhone</b></label><br>
    <input type="text" placeholder="TraineePhone" name="TraineePhone" required>
    <br>
    <label for="BirthOfDate"><b>BirthOfDate</b></label><br>
    <input type="text" placeholder="BirthOfDate" name="BirthOfDate" required>
    <br>
    <label for="TraineeLanguage"><b>TraineeLanguage</b></label><br>
    <input type="text" placeholder="TraineeLanguage " name="TraineeLanguage" required>
    <br>
    <label for="TraineeAge"><b>TraineeAge</b></label><br>
    <input type="text" placeholder="TraineeAge " name="TraineeAge" required>
    <br>
    <label for="TraineeTOEIC"><b>TraineeTOEIC</b></label><br>
    <input type="text" placeholder="TraineeTOEIC " name="TraineeTOEIC" required>
    <br>
    <label for="TraineeEx"><b>TraineeEx</b></label><br>
    <input type="text" placeholder="TraineeEx " name="TraineeEx" required>
    <br>
    <label for="TraineeClass"><b>TraineeClass</b></label><br>
    <input type="text" placeholder="TraineeClass " name="TraineeClass" required>
    <br>
    <label for="TraineeLocation"><b>TraineeLocation</b></label><br>
    <input type="text" placeholder="TraineeLocation " name="TraineeLocation" required>
    <br>
    <label for="TraineePassword"><b>TraineePassword</b></label><br>
    <input type="text" placeholder="TraineePassword " name="TraineePassword" required>
    <br>

      <button type="submit" class="signupbtn" name="save" value="submit">Sign Up</button>
    
  </div>
</form>
    
</body>
</html>