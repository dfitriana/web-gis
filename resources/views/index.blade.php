<!doctype html>
<html>
<head>
  <title>Dolan Semarang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{-- tailwind css --}}
  @vite('resources/css/app.css')
</head>
<body>
  <div>
    {{-- navbar --}}
    <nav class="nav bg-transparant w-full flex justify-between h-12 top-0 fixed z-20 text-white">
      <div class="container my-auto flex justify-between">
          <a href="/" class="cursor-pointer">
              <div class="font-nunito text-xl font-bold tracking-tighter">Dolan Semarang.</div>
          </a>

          @if (Auth::user())
            <form action="{{route('logout')}}" method="post">
              @csrf
              <button type="submit" class="border flex px-3 py-1 gap-2 rounded-md hover:shadow-c7">
                <div class="pt-[3px]">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                </div>
                <div class="text-sm font-normal">Logout</div>
              </button>
            </form>
          @else
              <a href="/login">
                <button type="submit" class="border flex px-3 py-1 gap-2 rounded-md hover:shadow-c7">
                  <div class="pt-[3px]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-in"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path><polyline points="10 17 15 12 10 7"></polyline><line x1="15" y1="12" x2="3" y2="12"></line></svg>
                  </div>
                  <div class="text-sm font-normal">Login</div>
                </button>
              </a>
          @endif
      </div>
    </nav>

    {{-- section hero --}}
    <div class="relative h-[570px]">
      <img alt="semarang" src="img/hero.jpg" class="absolute w-full h-[570px] object-cover"/>
      <div class="bg-white/10 absolute w-full h-[570px]">
        <div class="container pt-48 w-full">
          <div class="font-sans text-3xl font-normal text-white">
            Hai Kamu, <span class="font-bold">Ayo main di Semarang!</span>
            <div class="text-sm text-gray-c1 w-2/4 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea vitae commodi inventore assumenda eos repellendus rerum corrupti a, cupiditate, atque, deleniti repudiandae dignissimos eum enim sequi dolor nisi corporis aperiam?</div>
          </div>
          {{-- <button type="button" class="absolute bottom-6 left-[49%] text-white">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="rounded-full w-12 h-12 animate-bounce bg-white/20 hover:bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75l3 3m0 0l3-3m-3 3v-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </button> --}}
        </div>
      </div>
    </div>
    {{--  --}}

    {{-- section destinasi wisata --}}
    <div class="container w-full pt-20 py-36 h-full">
      <div class="text-2xl font-nunito w-full text-black-c2 font-bold">
        Kunjungi Berbagai Destinasi Menarik
        <div class="text-sm mt-1 w-2/4 font-normal">
          Mau yang menegangkan? Atau yang bikin relaks? Temuin semuanya di sini.</div>
      </div>
      <div class="mt-16 grid grid-cols-3 gap-y-16 w-full">
        @foreach ($pariwisata as $item)
        <div class="w-[350px] h-[415px] rounded-xl border bg-white shadow-c1">
          <a href="/detail/{{$item->id}}" class="cursor-pointer">
            <img alt="{{ $item->places}}" src="{{ asset("storage/img/$item->image") }}" class="w-full h-[200px] object-cover rounded-t-xl"/>
          </a>
          <a href="/detail/{{$item->id}}" class="cursor-pointer">
            <div class="mt-5 px-5 font-nunito text-lg text-black-c2 font-semibold line-clamp-1 h-10 hover:text-black-c1">
              {{ $item->places}} 
            </div>
          </a>
          <div class="px-5 font-nunito text-sm text-black-c2 font-normal line-clamp-5">
            {{ $item->deskripsi}} 
          </div>
        </div>
        @endforeach
      </div>
    </div>
    {{--  --}}

    <div class="bg-gradient-to-r from-navy-c1 via-blue-900 to-cyan-600 relative">
      {{-- <img alt="round decoration" src="img/Subtract_left.png" class="h-full right-0 top-0 rotate-180 absolute"/> --}}
      {{-- <img alt="round decoration" src="img/Subtract_right.png" class="h-3/4 right-0 bottom-0 absolute"/> --}}

      <div class="container py-10 pl-10 text-white">
        <div class="text-2xl font-nunito w-full font-bold">
          Bagikan Destinasi Wisatamu!
          <div class="text-sm mt-1 w-2/4 font-normal text-gray-c1">
            Lokasimu belum ada di peta? Kini hanya dengan satu kali sentuhan jari, Anda bisa menambahkan lokasi destinasi wisata dengan mudah pada peta. Destinasi wisata akan secara otomatis tampil dan dapat dilihat oleh semua pengunjung.
          </div>
        </div>
        <a href="/map" class="cursor-pointer">
          <button class="mt-6 py-2 px-5 border border-green-c1 rounded-md text-white font-nunito text-sm font-semibold hover:bg-white/10 hover:text-green-c1 hover:border-green-c1-hv">Bagikan Sekarang</button>
        </a>
      </div>
    </div>

    {{-- footer --}}
    <div class="w-full text-center bg-gray-c2 text-xs font-normal text-black-c1 p-5">Copyright &#169; 2022</div>
  
  </div>


  <script>
    var nav = document.getElementsByTagName('nav')[0];
    nav.style.backgroundColor = 'transparant';
    nav.style.color = 'white'; //text-color

    window.onscroll = function (event) {
      var scroll = window.pageYOffset;
      var scrolly = window.scrollY;

      if (!scrolly || scroll < 100) {
        nav.style.backgroundColor = 'inherit';
        nav.style.color = 'white';
        nav.style.boxShadow = 'none'; 
      } else {
        nav.style.backgroundColor = 'white';
        nav.style.color = 'black'; 
        nav.style.boxShadow = '0px 1px 0px #E5E9F2';      
      }
        
    }


  </script>
</body>
</html>