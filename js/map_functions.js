let map;

// hardcoded positions for now
const positions = [ {lat: 43.651, lng: -79.349 }, 
                    {lat: 43.659, lng: -79.347 },
                    {lat: 43.643, lng: -79.343 },
                    {lat: 43.652, lng: -79.346 },
                    {lat: 43.650, lng: -79.352 }]
let infowindows = []
let markers = []

// For individual object page
function initMapIndividual() {
  // Initialize our Google map
  map = new google.maps.Map(document.getElementById("map"), {
    // toronto center
    center: { lat: 43.651, lng: -79.347 },
    zoom: 14,
  });
  const marker = new google.maps.Marker({
    position: { lat: 43.651, lng: -79.347 },
    map,
    title: "Sample Object X"
  });
}

// For sample results page
function initMap() {
  // Initialize our Google map
  map = new google.maps.Map(document.getElementById("map"), {
    // toronto center
    center: { lat: 43.651, lng: -79.347 },
    zoom: 14,
  });

  // Generate a bunch of markers on the map
  generateInitialMarkers(map);
}

function generateInitialMarkers() {
  let i = 1;
  for (pos of positions)  {
    createMarker(pos, 'Sample Object ' + i);
    i++;
  }
}
function createMarker(pos, t) {
  // Set content for the popup
  const contentString =
    '<div id="content">' +
    'Object name' +
    '</br>' +
    'Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</br>' + 
    '<a href="./individual_sample.html" class="btn btn-primary">Go to object page!</a>' +
    "</div>";

  // Infowindow is used for popup upon click on marker
  var infowindow = new google.maps.InfoWindow({
    content: contentString,
  });

  var marker = new google.maps.Marker({
    position: pos,
    map,
    title: t
  });

  // Set event listener for on click action
  google.maps.event.addListener(marker, 'click', () => {
    // If infowindow is not already open, open it
    if (infowindow.getMap() == null) {
      infowindow.open({
        anchor: marker,
        map,
        shouldFocus: false,
      });
    // Otherwise, when user clicks on marker while infowindow is open, close the infowindow
    } else {
      infowindow.close();
    }
  });

  // Store these created objects into a list in case we need to use it later
  infowindows.push(infowindow);
  markers.push(marker);
}