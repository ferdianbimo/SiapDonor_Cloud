<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Donor;

class DonorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Donor::factory()->count(50)->create();

        // DB::table('donors')->insert([
        //     [
        //         'firstname' => 'Abigail',
        //         'lastname' => 'Eloise',
        //         'email' => 'aby@gmail.com',
        //         'gender' => 'Female',
        //         'age' => 23,
        //         'bloodtype_id' => 1
        //     ],
        //     [
        //         'firstname' => 'Ben',
        //         'lastname' => 'Rodger',
        //         'email' => 'ben@gmail.com',
        //         'gender' => 'Male',
        //         'age' => 33,
        //         'bloodtype_id' => 2
        //     ],
        //     [
        //         'firstname' => 'Mateo',
        //         'lastname' => 'Levoux',
        //         'email' => 'teo@gmail.com',
        //         'gender' => 'Male',
        //         'age' => 25,
        //         'bloodtype_id' => 4
        //     ]
        // ]);
    }
}
