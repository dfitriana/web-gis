<div>
    <div class="container w-full h-full mt-12 mb-24 px-0 shadow-c2 flex">
        <div class="w-[35%] p-8">
            <div class="font-nunito text-lg text-black-c1 font-normal">
                Hai Kamu, <span class="font-bold">Dimana Lokasi Destinasi Wisatamu?</span>
                <div class="mt-2 text-sm text-gray-c3">
                    Tambahkan lokasi destinasimu dengan cara mengarahkan cursor ke peta dan kemudian mengklik-nya
                </div>
            </div>
            <div class="mt-8 w-full">
                <form wire:submit.prevent="saveLocation">
                    <div class="flex gap-4">
                        <div class="mb-3 w-full">
                            <label class="font-sans block text-gray-c23 text-sm font-semibold mb-1" for="longtitude">
                              Longtitude
                            </label>
                            <input wire:model="long" class="font-sans font-normal text-sm bg-green-c8 appearance-none border-gray-c1 rounded-md w-full py-2 px-3 text-gray-700 leading-tight placeholder-gray-c25 cursor-not-allowed" id="longtitude" type="text" placeholder="longtitude coordinate" disabled/>
                            @error('long')
                            <div class="font-sans font-normal text-xs text-red-c1 mt-1">{{$message}}</div>
                        @enderror
                        </div>
                        <div class="mb-4 w-full">
                            <label class="font-sans block text-gray-c23 text-sm font-semibold mb-1" for="latitude">
                              Latitude
                            </label>
                            <input wire:model="lat" class="font-sans font-normal text-sm bg-green-c8 appearance-none border-gray-c1 rounded-md w-full py-2 px-3 text-gray-700 leading-tight placeholder-gray-c25 fcursor-not-allowed" id="latitude" type="text" placeholder="latitude coordinate" disabled/>
                            @error('lat')
                            <div class="font-sans font-normal text-xs text-red-c1 mt-1">{{$message}}</div>
                        @enderror
                        </div>
                    </div>

                    <div class="mb-4 w-full">
                        <label class="font-sans block text-gray-c23 text-sm font-semibold mb-1" for="nama-tempat">
                          Nama Tempat
                        </label>
                        <input wire:model="title" class="font-sans font-normal text-sm bg-white appearance-none border-gray-c1 rounded-md w-full py-2 px-3 text-gray-700 leading-tight placeholder-gray-c25 focus:outline-none focus:border-blue-c1 focus:ring-green-c1" id="nama-tempat" type="text" placeholder="Isikan nama tempat destinasimu"/>
                        @error('title')
                            <div class="font-sans font-normal text-xs text-red-c1 mt-1">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="mb-4 w-full">
                        <label class="font-sans block text-gray-c23 text-sm font-semibold mb-1" for="deskripsi">
                          Deskripsi
                        </label>
                        <textarea 
                        wire:model="description"
                        class="font-sans font-normal text-sm bg-white appearance-none border-gray-c1 rounded-md w-full py-2 px-3 text-gray-700 leading-tight placeholder-gray-c25 focus:outline-none focus:border-blue-c1 focus:ring-green-c1 block overflow-hidden" 
                        id="deskripsi" 
                        rows="4" 
                        placeholder="deskripsikan tempat destinasimu disini..."></textarea>
                        @error('description')
                            <div class="font-sans font-normal text-xs text-red-c1 mt-1">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-4 w-full h-[150px]">
                        <label class="block">
                            <span class="font-sans block text-gray-c23 text-sm font-semibold mb-2">Gambar destinasi</span>
                            <input wire:model="image" type="file" class="block w-full text-sm text-gray-c25
                              file:mr-4 file:py-2 file:px-4
                              file:rounded-full file:border-0
                              file:text-sm file:font-semibold
                              file:bg-blue-50 file:text-blue-700
                              hover:file:bg-blue-100
                            "/>
                        </label>
                        @error('image')
                            <div class="font-sans font-normal text-xs text-red-c1 mt-1">{{$message}}</div>
                        @enderror
                        @if($image)
                            <img alt="destinasi" src="{{$image->temporaryUrl()}}" class="w-auto h-[70px] mt-3"/>
                        @endif
                    </div>

                    <button
                    type="submit"
                    class="w-full mt-[30px] font-sans font-semibold text-xs h-10 sm:rounded-md bg-blue-c1 hover:bg-blue-400 transition-all duration-200 ease-linear text-white flex justify-center items-center px-4"
                    >
                        Kirim Destinasi Wisata
                    </button>
                    
                </form>

            </div>
        </div>
        <div wire:ignore id='map' class="w-[65%] h-[100vh]"></div>

    </div>
    

</div>

@push('script')
<script>
    document.addEventListener('livewire:load', () => {
        const defaultLocation = [110.4228709816665,-6.990393936523219]

    mapboxgl.accessToken = 'pk.eyJ1IjoiZGZpdHJpYW5hIiwiYSI6ImNsYmc0a3pwejA1dHczcHEzYmJpcG5ndXYifQ.I4HBCvvZH5hHK8zC0-nFTA';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: defaultLocation, // starting position
        zoom: 10
    });

    map.addControl(new mapboxgl.NavigationControl()); //add navigation
    // get data lng,lat from map
    map.on('click', (e) => {
        const longtitude = e.lngLat.lng
        const latitude = e.lngLat.lat

        @this.long = longtitude
        @this.lat = latitude

        // console.log({longtitude, latitude});
    })

    // console.log(@this.test);
    })

</script>
@endpush
