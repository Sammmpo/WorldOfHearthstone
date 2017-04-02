

<!DOCTYPE html>
<html lang="en">
<?php
include 'connect.php';
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $locationId = $_POST["inputId"];

    $query = "DELETE FROM locations WHERE id=".$locationId;
    if ($conn->query($query) === TRUE) {
    } else {
      echo "Error: " . $query . "<br>" . $conn->error;
    }

    header("Location: map.php");

} else {
    header("Location: map.php");
}
?>

</html>
