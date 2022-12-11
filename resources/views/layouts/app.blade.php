<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dolan Semarang</title>

    {{-- mapbox --}}
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.11.0/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.11.0/mapbox-gl.js"></script>

    {{-- tailwind css --}}
    @vite('resources/css/app.css')

    {{-- livewire --}}
    @livewireStyles
</head>
<body>

    {{-- navbar --}}
    <div class="bg-white w-full flex justify-between h-12 shadow-c6 top-0 fixed z-20 text-black">
        <div class="container my-auto flex justify-between">
            <a href="/" class="cursor-pointer">
                <div class="font-nunito text-xl font-bold tracking-tighter">Dolan Semarang.</div>
            </a>
            <form action="{{route('logout')}}" method="post">
            @csrf
                <button type="submit" class="flex border px-3 py-1 gap-2 rounded-md hover:shadow-c7">
                    <div class="pt-[3px]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                    </div>

                    <div class="text-sm font-normal">Logout</div>
                </button>
            </form>
        </div>
    </div>

    {{-- main content --}}
    <div class="w-full bg-white mt-24">
        @yield('content')

        {{isset($slot) ? $slot : null}}
    </div>

    {{-- footer --}}
    <div class="w-full text-center bg-gray-c2 text-xs font-normal text-black-c1 p-5">Copyright &#169; 2022</div>
  



    @livewireScripts
    @stack('script')
    
</body>
</html>