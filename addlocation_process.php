<!DOCTYPE html>
<html lang="en">
<?php
include 'connect.php';
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['inputName'];
  $x = $_POST['inputX'];
  $y = $_POST['inputY'];
  $query = "INSERT INTO locations (name, xCoord, yCoord) VALUES ('$name', $x, $y);";
  if ($conn->query($query) === TRUE) {
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  header("Location: map.php");
} else { header("Location: map.php"); }
?>
