function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    alert("Geolocation is not enabled or not supported by this browser.")
  }
}

function showPosition(position) {
    var latlon = position.coords.latitude + "," + position.coords.longitude;
    window.location.href = "results_sample.html?lat=" + position.coords.latitude + "&long=" + position.coords.longitude;
}