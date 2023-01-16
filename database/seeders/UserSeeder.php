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
        User::create([
            'name'      => 'indocyber',
            'email'     => 'admin@indocyber.id',
            'email_verified_at' => date('Y-m-d H:i:s', time()),    
            'password' => bcrypt('password'), 
        ]);
    }
}
