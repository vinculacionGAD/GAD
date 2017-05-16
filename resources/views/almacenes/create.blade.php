@extends('layouts.app')
@section('content')
	{!!Form::open(['class'=>'form-horizontal', 'id'=>'frmAlmacenes', 'method'=>'POST'])!!}

		<div id="msj-insert-almacen" class="alert alert-success alert-dismissible" role="alert" style="display: none">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<strong>Almacén Agregado Correctamente</strong>
		</div>		

		<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
	
		<div class="form-group">
			<div class="col-md-6 col-xs-12">
				<h1 style="font-size: 20px; font-weight: bold; color: black;">Registro de Almacenes</h1>
			</div>
		</div>
		@include('recursos.forms.recursos')			
		@include('almacenes.forms.almacenes')

		<style type="text/css">
			#map{
				width: 400px;
				height: 300px;
				margin-left: 10px;
			}
		</style>
		<div id="map"></div>
    	<script>
  
			var map;
			var markers = [];

			function initMap() {
  				var haightAshbury = {lat: 37.769, lng: -122.446};
  				map = new google.maps.Map(document.getElementById('map'), {
			    zoom: 16,
    			center: haightAshbury,    
  			});

  			// This event listener will call addMarker() when the map is clicked.
		  	map.addListener('click', function(event) {
		    	deleteMarkers();
		    	addMarker(event.latLng);
		  	});

			// Adds a marker at the center of the map.
  			addMarker(haightAshbury);

  			var infoWindow = new google.maps.InfoWindow({map: map});
 
  			// Try HTML5 geolocation.
  			if (navigator.geolocation) {
    			navigator.geolocation.getCurrentPosition(function(position) {
      			var pos = {
        		lat: position.coords.latitude,
        		lng: position.coords.longitude
      		};
 
      		infoWindow.setPosition(pos);
      		infoWindow.setContent('Location found.');
      		map.setCenter(pos);
    		}, function() {
      			handleLocationError(true, infoWindow, map.getCenter());
    		});
  			} else {
    		// Browser doesn't support Geolocation
    			handleLocationError(false, infoWindow, map.getCenter());
  			}
		}

		// Adds a marker to the map and push to the array.
		function addMarker(location) {
  			var marker = new google.maps.Marker({
    		position: location,
    		map: map
  		});
  		
  		markers.push(marker);
  		$("#latitud").val(marker.getPosition().lat());
  		$("#longitud").val(marker.getPosition().lng());
  		//alert(marker.getPosition().lat());
		}

		// Sets the map on all markers in the array.
		function setMapOnAll(map) {
	  		for (var i = 0; i < markers.length; i++) {
	    		markers[i].setMap(map);
	  		}
		}

		// Removes the markers from the map, but keeps them in the array.
		function clearMarkers() {
  			setMapOnAll(null);
		}

		// Shows any markers currently in the array.
		function showMarkers() {
  			setMapOnAll(map);
		}

		// Deletes all markers in the array by removing references to them.
		function deleteMarkers() {
  			clearMarkers();
  			markers = [];
		}

	</script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKdrwQmzjIoACEil9sn4bti0WzrVpkJkI&callback=initMap"
    async defer></script>

	<input type="hidden" name="latitud" id="latitud">
	<input type="hidden" name="longitud" id="longitud">			

	<br/>

	<div class="form-group">
		<div class="col-md-6 col-xs-12">
			{!!link_to('#', $title='Registrar', $attributes = ['id'=>'registroAlmacen','class'=>'btn btn-primary'], $secure = null)!!}
		</div>
	</div>
		
	{!!Form::close()!!}		
@endsection