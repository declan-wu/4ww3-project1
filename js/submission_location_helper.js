
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(setPosition);
  } else {
    alert("Geolocation is not enabled or not supported by this browser.")
  }
}

function setPosition(position) {
  var lat = document.getElementById("object-lat");
  var long = document.getElementById("object-long");
  lat.value = position.coords.latitude;
  long.value = position.coords.longitude;
}