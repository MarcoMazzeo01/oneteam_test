<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class AdminSeeder extends Seeder
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
            'username' => 'UNITRE',
            'email' => 'admin@unitre.it',
            'password' => Hash::make('password'),
            'rank' => 'admin',
            'address' => 'Passeggiata Laura Seghettini, 54027 Pontremoli MS',
            'phone' => '3273425049',
            'birthday' => Carbon::make('now'),
            'IBAN' => $faker->iban('IT')
        ]);
    }
}
