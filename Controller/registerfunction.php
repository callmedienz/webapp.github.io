
<?php
require_once('./db.php');
if(isset($_GET['StaffID']) && isset($_GET['StaffName']) && isset($_GET['StaffEmail']) && isset($_GET['StaffPhone'])&& isset($_GET['StaffPassword']))
{
    $SID = $_GET['StaffID'];
    $SName = $_GET['StaffName'];
    $SEmail = $_GET['StaffEmail'];
    $SPhone = $_GET['StaffPhone'];
    $SPassword = md5($_GET['StaffPassword']);
    $sql = "Insert into staff values('".$SID."','".$SName."', '".$SEmail."', '".$SPhone."', '".$SPassword."' )";
    $result = execsql($sql);
    if (!$result) {
        echo("ABC");
        die();
    }else{
        header("Location:adminstaff.php");
    }
}

?>