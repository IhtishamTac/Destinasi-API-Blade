<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Destinasi;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'admin',
            'email' => 'a@gmail.com',
            'password' => bcrypt('a'),
        ]);
        Destinasi::create([
            'nama' => 'Gunung Bromo',
            'foto' => 'img/gunungbromo.jpeg',
            'alamat' => 'sumatera',
            'link' => 'https://www.google.com/maps/place/Gn.+Bromo/@-7.9424934,112.9530122,15z/data=!3m1!4b1!4m6!3m5!1s0x2dd637aaab794a41:0xada40d36ecd2a5dd!8m2!3d-7.9424936!4d112.9530122!16zL20vMDI3Z3Jf!5m1!1e4?entry=ttu',
            'deskripsi' => 'Wisata alam',
            'user_id' => 1
        ]);
        Destinasi::create([
            'nama' => 'Raja ampat',
            'foto' => 'img/rajaampat.jpeg',
            'alamat' => 'Papua Barat',
            'link' => 'https://www.google.com/maps/place/Kabupaten+Raja+Ampat/@-1.0290239,129.1853489,8z/data=!3m1!4b1!4m6!3m5!1s0x2d5c3eaaccb47097:0x7851bd844c4cdf44!8m2!3d-1.0320468!4d130.5052176!16s%2Fm%2F02pgv9k!5m1!1e4?entry=ttu',
            'deskripsi' => 'Wisata alam',
            'user_id' => 1
        ]);
    }
}
