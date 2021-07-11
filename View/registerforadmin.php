<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="restyle.css">
</head>
<body>
<ul>
  <li><a href="loginform1.php">Logout</a></li>
</ul>
    
<form action="registerfunction.php" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="StaffID"><b>StaffID</b></label><br>
    <input type="text" placeholder="StaffID " name="StaffID" required>
    <br>
    <label for="StaffName"><b>StaffName</b></label><br>
    <input type="text" placeholder="StaffName " name="StaffName" required>
    <br>
    <label for="StaffEmail"><b>StaffEmail</b></label><br>
    <input type="text" placeholder="StaffEmail" name="StaffEmail" required>
    <br>
    <label for="StaffPhone"><b>StaffPhone</b></label><br>
    <input type="text" placeholder="StaffPhone" name="StaffPhone" required>
    <br>
    <label for="StaffPassword"><b>StaffPassword</b></label><br>
    <input type="text" placeholder="StaffPassword" name="StaffPassword" required>

      <button type="submit" class="signupbtn" name="save" value="submit">Sign Up</button>
    
  </div>
</form>


</body>
</html>