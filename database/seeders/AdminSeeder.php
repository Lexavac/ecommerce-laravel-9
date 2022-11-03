<?php

namespace Database\Seeders;

use App\Models\Tb_customer;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\DBAL\TimestampType;
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
        $admin = [
                [
                    'username' => 'lexavac', 
                    'password' => bcrypt('lexa2710'),
                    'is_admin' => true,
                    'firstname' => 'admin',
                    'lastname' => 'admin',
                    'email' => 'lexavac27@gmail.com',
                    'phoneNumber' => '7777777',
                    'adress' => 'sky',
                    'created_at'=> Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'=> Carbon::now()->format('Y-m-d H:i:s'),
                    'remember_token' => Null

                    
                ]
            ];
        Tb_customer::insert($admin);
    }
}
