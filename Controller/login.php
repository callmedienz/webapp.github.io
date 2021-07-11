<?php 
require_once("db.php");
if (isset($_POST['User']) && isset($_POST['Pass'])) {
    $user = $_POST['User'];
    $pass = $_POST['Pass'];
    $sql = "SELECT * FROM account WHERE Username='".$_POST["User"]."'";
    $conn = new mysqli($hostname, $username, $password, $dbname, $port);
    $result = mysqli_query($conn,$sql);
    $rows = mysqli_fetch_array($result);
    switch ($rows["Usertype"]) 
    {
        case "Admin":
            header("Location:adminstaff.php");
            die();
            break;
        case "Staff":
            header("Location:managetraineeforstaff.php");
            die();
            break;
        case "Trainer":
            header("Location:trainer.php");
            die();
            break;
         case "Trainee":
            header("Location:trainee.php");
            die();
            break;
    }
}
?>