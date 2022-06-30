<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    
        //
        {
            $admin = Admin::create([
        'name'     => 'admin',
        'email' => 'admin@gmail.com',
        'password' => bcrypt('click123'),
    ]);
}
}