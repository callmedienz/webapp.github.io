<?php
require_once("db.php");

if(isset($_GET['StaffID']))
{
	$StaffID = $_GET['StaffID'];
	$sql = "delete from staff where StaffID = '" . $ID . "'";
	$result = execsql($sql);
	if($result)
	{
		header("Location: admin.php");
	}
	else
	{
		echo"Sql statement fail";
	}
}


if(isset($_GET['TrainerID']))
{
	$ID = $_GET['TrainerID'];
	$sql = "delete from trainer where TrainerID = '" . $ID . "'";
	$result = execsql($sql);
	if($result)
	{
		header("Location: admin.php");
	}
	else
	{
		echo"Sql statement fail";
	}
}

if(isset($_GET['TraineeID']))
{
	$ID = $_GET['TrainerID'];
	$sql = "delete from trainee where TraineeID = '" . $ID . "'";
	$result = execsql($sql);
	if($result)
	{
		header("Location: staff.php");
	}
	else
	{
		echo"Sql statement fail";
	}
}

if(isset($_GET['TrainerID']))
{
	$ID = $_GET['TrainerID'];
	$sql = "delete from trainer where TrainerID = '" . $ID . "'";
	$result = execsql($sql);
	if($result)
	{
		header("Location: staff.php");
	}
	else
	{
		echo"Sql statement fail";
	}
}

if(isset($_GET['CourseID']))
{
	$ID = $_GET['CourseID'];
	$sql = "delete from course where CourseID = '" . $ID . "'";
	$result = execsql($sql);
	if($result)
	{
		header("Location: staff.php");
	}
	else
	{
		echo"Sql statement fail";
	}
}
?>

