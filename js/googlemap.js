
function initialize() {
  var propertiPeta = {
    center:new google.maps.LatLng(-7.756100, 110.409678),
    zoom:9,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
  
  // membuat Marker
  var marker = new google.maps.Marker({
      position: new google.maps.LatLng(-7.756100, 110.409678),
      map: peta
  });

}

// event jendela di-load  
google.maps.event.addDomListener(window, 'load', initialize);

