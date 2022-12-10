<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

use Livewire\Component;
use App\Models\list_pariwisata;

class MapLocation extends Component
{

    use WithFileUploads;

    public $long,$lat,$title,$description,$image;
    public $test = "aku peta, aku peta";

    private function clearForm(){
        $this->long = '';
        $this->lat = '';
        $this->title = '';
        $this->description = '';
        $this->image = '';
    }

    // add custom location from user
    public function saveLocation(){
        $this->validate([
            'long' => 'required',
            'lat' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|max:2048|required',
        ]);

        $imageName = md5($this->image.microtime()).'.'.$this->image->extension();

        Storage::putFileAs(
            'public/img', //dimana disimpan
            $this->image, //darimana asalnya
            $imageName  //nama filenya
        );

        list_pariwisata::create([
            'places' => $this->title,
            'deskripsi' => $this->description,
            'longitude' => $this->long,
            'latitude' => $this->lat,
            'image' => $imageName,
        ]);

        $this->clearForm();
        // $this->loadLocations()    //refresh

        //redirect to index
        // return redirect()->route('/map')->with(['success' => 'Data Berhasil Disimpan!']);
        session()->flash('message', 'Lokasi Destinasi Wisatamu Berhasil Disimpan!');
        return back();
    }


    public function render()
    {
        return view('livewire.map-location');
    }
}
