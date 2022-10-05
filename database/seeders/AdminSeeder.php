<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'nama_admin' => 'ibrauhm',
            'alamat' => 'pati',
            'username' => 'ib',
            'password' => Hash::make(12345)
        ]);
        Admin::create([
            'nama_admin' => 'ibrauhm2',
            'alamat' => 'pati',
            'username' => 'ib2',
            'password' => Hash::make(12345)
        ]);
        Admin::create([
            'nama_admin' => 'ibrauhm3',
            'alamat' => 'pati',
            'username' => 'ib3',
            'password' => Hash::make(12345)
        ]);
    }
}
