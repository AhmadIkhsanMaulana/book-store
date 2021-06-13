<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'nama' => 'ahmad',
            'alamat' => 'cicurug',
            'telpon' => '081291076937',
            'status' => 'aktif',
            'username' => 'ahmad',
            'password' => bcrypt('1234'),
            'akses' => 'admin',
        ]);

        User::insert([
            'nama' => 'ikhsan',
            'alamat' => 'sukabumi',
            'telpon' => '085187362581',
            'status' => 'aktif',
            'username' => 'ikhsan',
            'password' => bcrypt('1234'),
            'akses' => 'manager',
        ]);

        User::insert([
            'nama' => 'maulana',
            'alamat' => 'caringin',
            'telpon' => '087870332',
            'status' => 'aktif',
            'username' => 'maulana',
            'password' => bcrypt('1234'),
            'akses' => 'kasir',
        ]);

    }
}
