<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Menu::create([
            'name' => 'Bolognese (spaghetti/fettuccine)',
            'harga' => 25000,
            'jenis' => 'makanan',
            'quantity' => 10,
            'deskripsi' => '',
        ]);
        Menu::create([
            'name' => 'aglio olio (spaghetti/fettuccine)',
            'harga' => 23000,
            'jenis' => 'makanan',
            'quantity' => 30,
            'deskripsi' => '',
        ]);
        Menu::create([
            'name' => 'beef teriyaki',
            'harga' => 25000,
            'jenis' => 'makanan',
            'quantity' => 50,
            'deskripsi' => '',
        ]);
        Menu::create([
            'name' => 'chicken teriyaki',
            'harga' => 23000,
            'jenis' => 'makanan',
            'quantity' => 10,
            'deskripsi' => '',
        ]);
    }
}
