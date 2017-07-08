<!DOCTYPE  html>
<html>
<head>
	<title>Geolocation</title>
	<!-- Memanggil pustaka Google Map -->
	<SCRIPT src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZAA8SUunr3BYp3RHH_Q_ZGsSHuwj8epY"></SCRIPT>
	<script type="Text/Javascript" src="geolocation.js"></script>
 
	<!-- CSS Untuk mengatur ukuran Peta -->
	<style type="text/css">
		#mapDiv { 
			width: 1350px; 
			height: 500px;
		}
	</style>
 
	<!-- membuat script untuk menampilkan peta -->
	<SCRIPT>
	//variabel GLOBAL
	var  map; //langsung di eksekusi oleh browser  
	function initMap() {
		//dieksekusi jika nama fungsi di panggil
		// mengatur opsi map 
		var mapOptions = {
		//lokasi awal yang akan di tampilkan di tengah layar
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
	// variabel utk mengontrol elemen div
	var mapElement = document.getElementById('mapDiv');
	// proses membuat peta dan meletakannya pada elemen div
	map = new google.maps.Map(mapElement, mapOptions); 
	}

	// menampilkan peta, pada saat dokumen html di // LOAD dalam screen browser
	// panggil fungsi initMap() pada saat dokumen di load dalam screen
	google.maps.event.addDomListener(window, 'load', initMap); 
	</SCRIPT>
	
	<script>
	if (navigator.geolocation) {
	//minta ijin kepada user, jika diijinkan 
	//navigator.geolocation = True
	 
	//membaca posisi/lokasi client (browser) saat ini
	navigator.geolocation.getCurrentPosition(
		// position adalah data lokasi hasil pembacaan 
		// berupa lokasi dalam json
		function(position) {
			console.log(position);   //menulis di konsole
			var lat = position.coords.latitude
			var lng = position.coords.longitude;
	 
		// devCenter adalah data lokasi dengan format 
		// google.maps
		var devCenter =  new google.maps.LatLng(lat, lng);
		// mengatur lokasi PUSAT peta (map) 
		map.setCenter(devCenter);
		//mengatur Level ZOOM (20)
		map.setZoom(18);
										
		console.log(latitude + " -- " + longitude);
		});
	}
	</script>
	
	


</head>

<body>
	<!-- lokasi untuk menampilkan peta -->
	<input id="btnRoad" type="button" value="RoadMap">
    <input id="btnSat" type="button" value="Satellite">
	<br/><br/>
	<div id="mapDiv"></div>
	
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


</body>
</html>
