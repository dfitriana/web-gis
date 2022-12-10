<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\list_pariwisata;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // jika mau nambahkan user bisa menambahkan manual dengan un-comment script dibawah
        // $admin = User::create([
        //     'name'      => 'Admin',
        //     'email'     => 'iamAdmin@mail.com',
        //     'password'  => bcrypt('adminnih'),
        // ]);

        $this->call(ListPariwisata::class); //memasukkan data list pariwisata
    }
}
