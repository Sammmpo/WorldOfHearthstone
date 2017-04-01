<!DOCTYPE html>
<html lang="en">
<?php
include 'connect.php';
?>

<title>Add Location</title>
<head></head>

<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $x = $_POST['inputX'];
  $y = $_POST['inputY'];
  echo "
  <form id='addLocation' action='addlocation_process.php' method='post'>
    <input id='inputName' type='name' name='inputName' value='Name'>
    <input id='inputX' type='name' name='inputX' value=".$x.">
    <input id='inputY' type='name' name='inputY' value=".$y.">
    <input type='submit' value='Add New Location'>
  </form>
  ";
}
?>

</body>
</html>
