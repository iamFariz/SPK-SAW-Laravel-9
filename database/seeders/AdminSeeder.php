<?php

namespace Database\Seeders;
use \App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'ayasya',
            'email' => 'ayasya@user.com',
            'password' => bcrypt('user123'),
            'is_admin' => 0,
        ]);
    }
}
