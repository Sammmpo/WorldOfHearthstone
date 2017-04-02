
var tooltipSpan = document.getElementById('tooltip-span');

window.onmousemove = function (e) {
    var x = e.clientX,
        y = e.clientY;
    tooltipSpan.style.top = (y + 20) + 'px';
    tooltipSpan.style.left = (x + 20) + 'px';
};


function saveCoords(event) {
    var x = event.pageX;
    var y = event.pageY;
    var longCoords = "X: "+x+" and Y: "+y;
    document.getElementById("coordinatesLink").innerHTML = longCoords;
    document.getElementById("inputX").value = x;
    document.getElementById("inputY").value = y;
    document.getElementById("addLocation").submit();
}

function deleteLocation(id) {
  var locationId = id;
  document.getElementById("inputId").value = locationId;
  document.getElementById("deleteLocation").submit();
}

function trackCoords(event) {
    var x = event.pageX;
    var y = event.pageY;
    var coords = "X: " + x + ", Y: " + y;
    document.getElementById("coordinates").innerHTML = coords;
}
function clearCoor() {
    document.getElementById("coordinates").innerHTML = "";
}


var canvas = document.getElementById("myCanvas");
var ctx = canvas.getContext("2d");
ctx.lineWidth=3;



/* GRID */
for (i=0; i<20; i++) {
  var luku = i * 400;
  ctx.moveTo(luku,0);
  ctx.lineTo(luku,5000);
  ctx.stroke();
}
for (i=0; i<50; i++) {
  var luku = i * 400;
  ctx.moveTo(0, luku);
  ctx.lineTo(7000, luku);
  ctx.stroke();
}
