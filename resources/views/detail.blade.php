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
    {{-- tailwind css --}}
  @vite('resources/css/app.css')
</head>
<body>
    <div id="fly">
        <div id="map" class="w-[65%] h-[100vh]"></div>
    </div>
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiZGZpdHJpYW5hIiwiYSI6ImNsYmc0a3pwejA1dHczcHEzYmJpcG5ndXYifQ.I4HBCvvZH5hHK8zC0-nFTA';
        // These options control the camera position after animation
        const start = {
            center: [{{ $pariwisata->longitude}},{{ $pariwisata->latitude}}],
            zoom: 2,
            pitch: 0,
            bearing: 0
        };
        const end = {
            center: [{{ $pariwisata->longitude}},{{ $pariwisata->latitude}}],
            zoom: 12.5,
            bearing: 50,  //animasi berputar/rotate
            pitch: 75     //peta datar
        };
        const map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v12',
            center: [{{ $pariwisata->longitude}},{{ $pariwisata->latitude}}],
            // zoom: 12
            ...start
        });


        // add popup
        const popUp = new mapboxgl.Popup({
            offset:35,
            closeOnClick: false,
            // closeButton: false,
        })
        .setLngLat([{{ $pariwisata->longitude}},{{ $pariwisata->latitude}}])
        .setHTML(`
        <div class="w-[200px] h-[220px] rounded border bg-white">
              <img alt="{{ $pariwisata->places}}" src="{{ asset("storage/img/$pariwisata->image") }}" class="w-full h-[80px] object-cover rounded-t"/>
              <div class="mt-2 px-2 font-nunito text-sm text-black-c2 font-semibold line-clamp-1 h-8 hover:text-black-c1">
                {{ $pariwisata->places}} 
              </div>
            <div class="px-2 font-nunito text-xs text-gay-c1 font-normal line-clamp-5">
              {{ $pariwisata->deskripsi}} 
            </div>
        </div>
        `)
        // .setMaxWidth("400px")
        // .addTo(map);
    
        // Create a default Marker and add it to the map.
        const marker1 = new mapboxgl.Marker()
        .setLngLat([{{ $pariwisata->longitude}},{{ $pariwisata->latitude}}])
        .setPopup(popUp) // sets a popup on this marker
        .addTo(map);
        
        // add navigation control
        map.addControl(new mapboxgl.NavigationControl());
        
        // setting fly animation
        let isAtStart = true;
        document.getElementById('fly').addEventListener('click', () =>{
            // depending on whether we're currently at point a or b,
            // aim for point a or b
            const target = isAtStart ? end : start;
            console.log(isAtStart); //true
            isAtStart = !isAtStart;

            console.log(!isAtStart);//true
            console.log(isAtStart); //false
            
            map.flyTo({
                ...target, // Fly to the selected target
                duration: 12000, // Animate over 12 seconds
                essential: true // This animation is considered essential with
                //respect to prefers-reduced-motion
            });
        }, {once: true});
        
        
    </script>
</body>
</html>