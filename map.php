<!DOCTYPE html>
<html lang="en">

<?php
include 'connect.php';
?>

<head>
<title>Azeroth Map</title>
</head>

<body>

  <a class="tooltip">
    <canvas onclick="saveCoords(event)" onmousemove="trackCoords(event)" onmouseout="clearCoor()" id="myCanvas" width="7545" height="5055"
    style="border:0px solid #d3d3d3;">
    Your browser does not support the canvas element.
    </canvas>
      <span id="tooltip-span">
        <p class="special" id="coordinates">X: ?, Y: ?</p>
      </span>
  </a>


<p id="coordinatesLink"></p>


<form id="addLocation" action="addlocation.php" method="post">
  <input id="inputX" type="hidden" name="inputX" value=0>
  <input id="inputY" type="hidden" name="inputY" value=0>
</form>

<form id="deleteLocation" action="deletelocation.php" method="post">
  <input id="inputId" type="hidden" name="inputId" value=0>
</form>


<?php

$query = "SELECT * FROM locations";
$result = $conn->query($query);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "<div class='tt' id='".$row["id"]."' style='position: absolute; left: ".($row['xCoord']-38)."px; top: ".($row['yCoord']-38)."px;'>";
    echo "<img src='img/hs_icon.png' alt='card' width='75' height='75' class='free'>";
    echo "<span class='ttt'>".$row['name']." (id=".$row["id"].")<br>";
    $locationId = $row['id'];
    $query2 = "SELECT * FROM cards WHERE locationId = $locationId";
    $result2 = $conn->query($query2);
    if ($result2->num_rows > 0) {
      while ($row2 = $result2->fetch_assoc()) {
        echo "<img src='".$row2['imageLink']."' alt='card' width='144' height='200'>";
      }
    }
    echo "<button style='position: absolute; left: 425px; top: 190px;'>Add New Card</button>";
    echo "<img src='img/delete.png' alt='delete' width='50' height='50' onclick='deleteLocation(".$locationId.")' style='position: absolute; left: 450px; top: 0px;'>";
    echo "</span></div>";
  }
}

?>

<div class="scroll">
</div>


<script src="js/main.js"></script>
</body>

</html>
