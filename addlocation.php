<!DOCTYPE html>
<html lang="en">
<?php
include 'connect.php';
?>

<title>Add Location</title>
<head></head>

<body>

<center>
<h1>ADD NEW LOCATION</h1>
<br>
<span>Give it a name. The coordinates are where you clicked.</span><br><br>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $x = $_POST['inputX'];
  $y = $_POST['inputY'];
  echo "
  <form id='addLocation' action='addlocation_process.php' method='post'>
    Name <input id='inputName' type='name' name='inputName' value='Name'>
    X <input id='inputX' type='name' name='inputX' value=".$x.">
    Y <input id='inputY' type='name' name='inputY' value=".$y.">
    <input type='submit' value='Add New Location'>
  </form>
  ";
}
?>
</center>

</body>
</html>
