<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
    {{-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
    <title>Dolan Semarang</title>
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.11.0/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.11.0/mapbox-gl.js"></script>
</head>
<body>
    <div>
        <div class="absolute top-0 bottom-0 w-full"></div>
        <div class="absolute left-0 w-4 bg-white z-10">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis deserunt ipsam quos numquam sint. Doloribus modi, accusamus excepturi voluptatem architecto possimus quos ut sapiente, aliquam sint natus nemo et dolore.
        </div>
    </div>
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiYWZpZmFtaXJ1bGxhaCIsImEiOiJjbGFwYjhqZ2YxMmVuM3Bta3p5Nm55bm5rIn0.e24br9-eAlqOndWxGAFD7w';
        const map = new mapboxgl.Map({
            container: 'map',
            // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
            style: 'mapbox://styles/mapbox/streets-v12',
            center: [{{ $pariwisata->latitude}},{{ $pariwisata->longitude}}],
            zoom: 12
        });
    
        // Create a default Marker and add it to the map.
        const marker1 = new mapboxgl.Marker()
            .setLngLat([{{ $pariwisata->latitude}},{{ $pariwisata->longitude}}])
            .addTo(map);
    
    </script>
</body>
</html>