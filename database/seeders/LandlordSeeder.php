<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class LandlordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        User::create([
            'username' => 'MarioRossi',
            'email' => 'mario@test.it',
            'password' => Hash::make('password'),
            'rank' => 'landlord',
            'address' => 'Via Roma 10',
            'phone' => '00000000',
            'birthday' => Carbon::make('now'),
            'IBAN' => $faker->iban('IT')
        ]);
    }
}
