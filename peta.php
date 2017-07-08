<!DOCTYPE  html>
<html>
<head>
<SCRIPT src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLLZd2Z1wwV1V2BKsd-yUxvUhRUIH9kzg"></SCRIPT>
 
<style type="text/css">
              #mapDiv { 
width: 1300px; 
height: 550px;
  }
</style>
 
<SCRIPT>
           
var  map;   
function initMap() {
var mapOptions = {
 
      mapTypeId: google.maps.MapTypeId.ROADMAP
};
 var mapElement = document.getElementById('mapDiv');
 map = new google.maps.Map(mapElement, mapOptions);
 
}
google.maps.event.addDomListener(window, 'load', initMap);
 
</SCRIPT>
<SCRIPT>
if (navigator.geolocation) {
navigator.geolocation.getCurrentPosition(
  function(position) {
 
          console.log(position); 
          var lat = position.coords.latitude;
          var lng = position.coords.longitude;
          var devCenter =  new google.maps.LatLng(lat, lng);
          map.setCenter(devCenter);
          map.setZoom(18);
                                    
 console.log(latitude + " -- " + longitude);
 
       });
 
    }

</SCRIPT>
</head>
<body>
<input id="btnRoad" type="button" value="RoadMap">
<input id="btnTer" type="button" value="TERRAIN">
<input id="btnSat" type="button" value="Satellite">
<input id="btnHyb" type="button" value="HYBRID">

<div id="mapDiv"></div>

<script>
document.getElementById('btnRoad').addEventListener('click', function(){
               map.setMapTypeId(google.maps.MapTypeId.ROADMAP);
});
document.getElementById('btnTer').addEventListener('click', function(){
               map.setMapTypeId(google.maps.MapTypeId.TERRAIN);
});
document.getElementById('btnSat').addEventListener('click', function(){
                      map.setMapTypeId(google.maps.MapTypeId.SATELLITE);
});
document.getElementById('btnHyb').addEventListener('click', function(){
               map.setMapTypeId(google.maps.MapTypeId.HYBRID);
});
 
</script>
</body>
</html>
