<!DOCTYPE  html>
<html>
<head>
<SCRIPT src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDt_RuCG8oPCT1R6LneSu4b8kNyn9kP0W0 "></SCRIPT>
 
<style type="text/css">
              #mapDiv { 
width: 600px; 
height: 400px;
  }
</style>
<SCRIPT>
var  map;
function initMap() {
var mapOptions = {
center: new google.maps.LatLng(-7.9078, 110.8252),
zoom: 18,
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
     <script>
                     //click adalah NAMA EVENT
document.getElementById('btnRoad').addEventListener('click', function(){
               map.setMapTypeId(google.maps.MapTypeId.ROADMAP);
// map adalah variabel global terdapat dalam script sebelumnya
// .setMapTypeId   : perintah untuk mengubah tipe peta
//google.maps.MapTypeId.ROADMAP  : tipe peta ROADMAP
 
});
document.getElementById('btnSat').addEventListener('click', function(){
                      map.setMapTypeId(google.maps.MapTypeId.SATELLITE);
});
 
    </script>

</head>
<body>
        <b>Merubah tipe PETA</b><br/>
        <input id="btnRoad" type="button" value="RoadMap">
        <input id="btnSat" type="button" value="Satellite">
		<div id="mapDiv"></div>
</body>
</html>
