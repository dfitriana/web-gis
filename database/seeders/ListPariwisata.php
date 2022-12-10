<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\list_pariwisata;

class ListPariwisata extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //untuk mengkosongkan tabel
        \DB::table('list_pariwisatas')->delete();

        $list_data=[
            [
                'places'    => 'Bukit Diponegoro',
                'deskripsi' => 'Bukit Senja Diponegoro berada pada perumahan Bukit Diponegoro, Tembalang, Semarang.
                Saat ini menjadi salah satu objek wisata yang disukai kaum mahasiswa yang berada di Kota Semarang dan sekitarnya.',
                'longitude'  => '110.44186197366406',
                'latitude' => '-7.054801459774126',
                'image'     => 'diponegoro.jpg'
            ],
            [
                'places'    => 'Candi Gedongsongo',
                'deskripsi' => 'Candi Gedong Songo adalah nama sebuah kompleks bangunan candi peninggalan budaya Hindu yang terletak di desa Candi, Kecamatan Bandungan, Kabupaten Semarang, Jawa Tengah, Indonesia tepatnya di lereng Gunung Ungaran. Di kompleks candi ini terdapat sembilan ',
                'longitude'  => '110.42424001866925',
                'latitude' => '-7.244171919075185',
                'image'     => 'CandiGedongsongo.jpg'
            ],
            [
                'places'    => 'Curug Lawe Benowo',
                'deskripsi' => 'Curug Lawe berada di Desa Kalisidi, Gunung Pati, Kecamatan Ungaran Barat, Kabupaten Semarang. Air terjun ini terletak di sebelah timur lereng Gunung Ungaran. Tempat wisata alam ini hanya berjarak 21 Km dari pusat Kota Semarang dan 23 Km dari Stasiun Poncol. Cukup diperlukan waktu 1 jam untuk menuju lokasi rekreasi asalkan kepadatan lalu lintas lancar.',
                'longitude'  => '110.37048452516967',
                'latitude' => '-7.151711801956537',
                'image'     => 'CandiGedongsongo.jpg'
            ],
            [
                'places'    => 'Eling Bening',
                'deskripsi' => 'Tempat ini menawarkan pemandangan alam yang indah dengan pemandangan utama Rawa Pening.
                Keindahan pemandangan alam ini disempurnakan dengan latar Gunung Merbabu, Andong dan Telomoyo, yang berdiri dengan gagah dan terlihat jelas.',
                'longitude'  => '110.42668295220568',
                'latitude' => '-7.252977821860256',
                'image'     => 'elingbening.jpg'
            ],
            [
                'places'    => 'Curug Indrokilo',
                'deskripsi' => 'Desa Wisata Lerep tak hanya memiliki pesona budaya dan kearifan lokal di dalamnya, namun masih menyimpan permata tersembunyi di wisata alamnya yaitu Curug Indrokilo. Mungkin bagi sebagian orang yang tinggal di Semarang dan sekitarnya masih asing mendengar tempat wisata tersebut.',
                'longitude'  => '110.38975377261806',
                'latitude' => '-7.1398639041927225',
                'image'     => 'indrokilo.jpg'
            ],
            [
                'places'    => 'Lembah Kalipancur',
                'deskripsi' => 'Desa Wisata Lembah Kalipancur Semarang adalah tempat rekreasi atau lokasi wisata yang menawarkan kesan berbeda dari tempat rekreasi keluarga biasa. Menempati lahan seluas 7 hektar, Desa Wisata Lembah Kalipancur menawarkan pemandangan sawah yang dikelilingi bukit dan danau buatan.',
                'longitude'  => '110.37555542398684',
                'latitude' => '-7.020524642029727',
                'image'     => 'kalipancur.jpg'
            ],
            [
                'places'    => 'Mawar Camp',
                'deskripsi' => 'Mawar Camp merupakan salah satu destinasi wisata terbaik untuk kamu yang ingin bermalam dengan suasana pemandangan di pegunungan. Terletak tak jauh dari lokasi Gunung Ungaran, camping ground ini dijadikan alternatif kamu yang ingin mendaki tapi tidak kuat fisik.',
                'longitude'  => '110.36575954595446',
                'latitude' => '-7.19423778378011',
                'image'     => 'mawar.jpg'
            ],
            [
                'places'    => 'Kampung Pelangi',
                'deskripsi' => 'Kampung Wonosari punya julukan baru yaitu Kampung Pelangi. Bukan cuma tembok rumah yang dipenuhi warna tetapi juga atap dan tiap sudut jalanan kampung.',
                'longitude'  => '110.40832508938587',
                'latitude' => '-6.989123756860636',
                'image'     => 'pelangi.jpg'
            ],
            [
                'places'    => 'Brown Canyon',
                'deskripsi' => 'Brown Canyon merupakan destinasi wisata baru yang ada di semarang. Sebelumnya, tempat ini merupakan lokasi penggalian pasir bagian C yang sudah ada sejak puluhan tahun yang lalu.',
                'longitude'  => '110.46990965597985',
                'latitude' => '-7.073468158457516',
                'image'     => 'browncanyon.jpg'
            ],
        ];

        foreach($list_data as $a){
            list_pariwisata::create($a);
        };
    }
}
