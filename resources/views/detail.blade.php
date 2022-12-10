<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
    <title>Dolan Semarang</title>
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.11.0/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.11.0/mapbox-gl.js"></script>

    <style>
        body { margin: 0; padding: 0; }
        #map { position: absolute; top: 0; bottom: 0; width: 100%; }
    </style>
</head>
<body>
    <div id="map"></div>
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiZGZpdHJpYW5hIiwiYSI6ImNsYmc0a3pwejA1dHczcHEzYmJpcG5ndXYifQ.I4HBCvvZH5hHK8zC0-nFTA';
        const map = new mapboxgl.Map({
            container: 'map',
            // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
            style: 'mapbox://styles/mapbox/streets-v12',
            center: [{{ $pariwisata->longitude}},{{ $pariwisata->latitude}}],
            zoom: 12
        });
    
        // Create a default Marker and add it to the map.
        const marker1 = new mapboxgl.Marker()
        .setLngLat([{{ $pariwisata->longitude}},{{ $pariwisata->latitude}}])
        .addTo(map);
        map.addControl(new mapboxgl.NavigationControl());
        
        // console.log(map);
    </script>
</body>
</html>