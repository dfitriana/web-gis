<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dolan Semarang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{-- tailwind css --}}
  @vite('resources/css/app.css')
</head>
<body>
  <div>
    <div class="relative h-[100vh] bg-gradient-to-r from-blue-200 via-white to-purple-300 flex justify-center items-center hover:from-purple-400 hover:via-pink-100 hover:to-blue-400">
      <div class="absolute w-[480px] h-[450px] p-0">
        <div class="relative font-nunito mb-12 text-center text-5xl font-extrabold text-black-c1">
          Selamat datang.
          {{-- <div class="text-sm font-normal mt-3">
            Silahkan lakukan login untuk mengunjungi website kami
          </div> --}}
        </div>

        <form id="login" action="{{route('masuk')}}" method="post" class="px-8">
          @csrf
          <div class="mb-4 w-full">
            <label class="font-sans block text-black-c1 text-sm font-semibold mb-1" for="email">
              Email
            </label>
            <input 
              class="font-sans font-normal text-sm bg-white appearance-none border-gray-c1 rounded-md w-full py-2 px-3 text-gray-700 leading-tight placeholder-gray-c25 focus:outline-none focus:border-blue-c1 focus:ring-cyan-500" 
              id="email" 
              name="email"
              type="text" 
              placeholder="Isikan email kamu"/>
            @error('email')
                <div class="font-sans font-normal text-xs text-red-c1 mt-1">{{$message}}</div>
            @enderror
          </div>
          <div class="mb-4 w-full relative">
            <label class="font-sans block text-black-c1 text-sm font-semibold mb-1" for="password">
              Password
            </label>
            <input 
              class="font-sans font-normal text-sm bg-white appearance-none border-gray-c1 rounded-md w-full py-2 px-3 text-gray-700 leading-tight placeholder-gray-c25 focus:outline-none focus:border-blue-c1 focus:ring-cyan-500" 
              id="password" 
              name="password"
              type="password" 
              placeholder="Isikan password kamu"/>
            @error('password')
                <div class="font-sans font-normal text-xs text-red-c1 mt-1">{{$message}}</div>
            @enderror
          </div>

          <button
            type="submit"
            class="w-full mt-[30px] font-sans font-semibold text-xs h-10 sm:rounded-md bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-blue-500 hover:to-cyan-500 transition-all duration-200 ease-linear text-white flex justify-center items-center px-4"
            >
              Kirim Destinasi Wisata                    
          </button>
        </form>

      </div>
    </div>
  </div>
  
</body>
</html>