// ----- Flèche retour vers le haut -----
// http://www.trucsweb.com/tutoriels/javascript/retour-haut/
document.addEventListener('DOMContentLoaded', function() {
    window.onscroll=function(ev){
    document.getElementById("flecheRetour").className = (window.pageYOffset > 100) ? "cVisible" : "cInvisible";
    };
});


// ----- Menu responsive -----
function myFunctionMenu() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
}
// Add active class to the current button (highlight it)
var myTopnav = document.getElementById("myTopnav");
var onglets = myTopnav.getElementsByClassName("onglet");
for (var i = 0; i < onglets.length; i++) {
  onglets[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

// API MAPS
//https://developers.google.com/maps/documentation/javascript/reference/map#Map.data
//https://developers.google.com/maps/documentation/javascript/markers#maps_marker_simple-javascript
function initMap() {
    let carte;
    let mesCoordo = { lat: 43.61, lng: 3.87 };
    let marker;
    carte = new google.maps.Map(document.getElementById("carte"), {
        center: mesCoordo,
        zoom: 15,
        styles: [
            { elementType: "geometry", stylers: [{ color: "#2d3142" }] },
            { elementType: "labels.text.stroke", stylers: [{ color: "#2d3142" }] },
            { elementType: "labels.text.fill", stylers: [{ color: "#c69c6d" }] },
            {
              featureType: "administrative.locality",
              elementType: "labels.text.fill",
              stylers: [{ color: "#c69c6d" }],
            },
            {
              featureType: "poi",
              elementType: "labels.text.fill",
              stylers: [{ color: "#c69c6d" }],
            },
            {
              featureType: "poi.park",
              elementType: "geometry",
              stylers: [{ color: "#263c3f" }],
            },
            {
              featureType: "poi.park",
              elementType: "labels.text.fill",
              stylers: [{ color: "#c69c6d" }],
            },
            {
              featureType: "road",
              elementType: "geometry",
              stylers: [{ color: "#38414e" }],
            },
            {
              featureType: "road",
              elementType: "geometry.stroke",
              stylers: [{ color: "#212a37" }],
            },
            {
              featureType: "road",
              elementType: "labels.text.fill",
              stylers: [{ color: "#c69c6d" }],
            },
            {
              featureType: "road.highway",
              elementType: "geometry",
              stylers: [{ color: "#746855" }],
            },
            {
              featureType: "road.highway",
              elementType: "geometry.stroke",
              stylers: [{ color: "#1f2835" }],
            },
            {
              featureType: "road.highway",
              elementType: "labels.text.fill",
              stylers: [{ color: "#c69c6d" }],
            },
            {
              featureType: "transit",
              elementType: "geometry",
              stylers: [{ color: "#2f3948" }],
            },
            {
              featureType: "transit.station",
              elementType: "labels.text.fill",
              stylers: [{ color: "#c69c6d" }],
            },
            {
              featureType: "water",
              elementType: "geometry",
              stylers: [{ color: "#4f5d75" }],
            },
            {
              featureType: "water",
              elementType: "labels.text.fill",
              stylers: [{ color: "#c69c6d" }],
            },
            {
              featureType: "water",
              elementType: "labels.text.stroke",
              stylers: [{ color: "#4f5d75" }],
            },
          ],
    });
      //https://stackoverflow.com/questions/15096461/resize-google-maps-marker-icon-image
    image = {
      url: "img/markerDv2.png", // url
      scaledSize: new google.maps.Size(60, 60), // scaled size
      origin: new google.maps.Point(0,0), // origin
    };

    marker = new google.maps.Marker({
        position: mesCoordo,
        title: "È qui!",
        icon: image
    });
    marker.setMap(carte);
    
    //https://developers.google.com/maps/documentation/javascript/events
    marker.addListener("click", function() {
      carte.setZoom(18);
      carte.setCenter(marker.getPosition());
    });
    
}
