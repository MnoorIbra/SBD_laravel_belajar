<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produk::create([
            'merk'=> 'Tango',
            'stock' => 1,
            'harga' => 5000,
            'id_admin' => 3
        ]);
        
        Produk::create([
            'merk'=> 'Jelly',
            'stock' => 3,
            'harga' => 10000,
            'id_admin' => 2
        ]);
    }
}
