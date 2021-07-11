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
if(isset($_GET['CourseID']) && isset($_GET['CourseName']) && isset($_GET['CourseCategory']) && isset($_GET['CourseDescription'])&& isset($_GET['Trainer']))
{
    $CourseID = $_GET['CourseID'];
    $CourseName = $_GET['CourseName'];
    $Category = $_GET['CourseCategory'];
    $Description = $_GET['CourseDescription'];
    $Trainer = $_GET['Trainer'];
    $sql = "Insert into course values('".$CourseID."','".$CourseName."', '".$Category."', '".$Description."', '".$Trainer."')";
    $result = execsql($sql);
    if (!$result) {
        echo("ABC");
        die();
    }else{
        header("Location:managecourseforstaff.php");
    }
}
    ?>
    
<form action="" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="CourseID"><b>CourseID</b></label><br>
    <input type="text" placeholder="CourseID " name="CourseID" required>
    <br>
    <label for="CourseName"><b>CourseName</b></label><br>
    <input type="text" placeholder="CourseName " name="CourseName" required>
    <br>
    <label for="CourseCategory"><b>CourseCategory</b></label><br>
    <input type="text" placeholder="CourseCategory" name="CourseCategory" required>
    <br>
    <label for="CourseDescription"><b>CourseDescription</b></label><br>
    <input type="text" placeholder="CourseDescription" name="CourseDescription" required>
    <br>
    <label for="Trainer"><b>Trainer</b></label><br>
    <input type="text" placeholder="Trainer" name="Trainer" required>

      <button type="submit" class="signupbtn" name="save" value="submit">Sign Up</button>
    
  </div>
</form>

    
</body>
</html>