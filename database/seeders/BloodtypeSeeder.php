<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Bloodtype;

class BloodtypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bloodtypes = [
            ['code' => 'T1O', 'type' => 'O', 'description' => 'Blood Type O'],
            ['code' => 'T2A', 'type' => 'A', 'description' => 'Blood Type A'],
            ['code' => 'T3B', 'type' => 'B', 'description' => 'Blood Type B'],
            ['code' => 'T4AB', 'type' => 'AB', 'description' => 'Blood Type AB']
        ];

        foreach ($bloodtypes as $bloodtype) {
            Bloodtype::create($bloodtype);
        }

        // DB::table('bloodtypes')->insert([
        //     [
        //         'code' => 'T1O',
        //         'type' => 'O',
        //         'description' => 'Blood Type O'
        //     ],
        //     [
        //         'code' => 'T2A',
        //         'name' => 'A',
        //         'description' => 'Blood Type A'
        //     ],
        //     [
        //         'code' => 'T3B',
        //         'type' => 'B',
        //         'description' => 'Blood Type B'
        //         ],
        //     [
        //         'code' => 'T4AB',
        //         'name' => 'AB',
        //         'description' => 'Blood Type AB'
        //     ]
        // ]);
    }
}
