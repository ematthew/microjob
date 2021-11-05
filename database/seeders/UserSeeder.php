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
        for ($i=0; $i < 1; $i++) { 
            // code...
            // $account_type = rand(1, 2);
            // $faker = \Faker\Factory::create();
            $user                       = new User();
            $user->name                 = "Business";
            $user->account_type         = 1;
            $user->email                = "business@example.com";
            $user->email_verified_at    = now();
            $user->password             = bcrypt("password");
            $user->save();
        }
    }
}
