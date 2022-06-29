<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Setting\Setting::create([

            'title' => "MRS TECHNOLOY",
            'description' => "LIVE Tv Server",
            'address' => "#31 Molla Bari, East Raza Bazar, Tejgaon, Dhaka - 1215",
            'contract' => "01511100752",
            'email' => "info@mrsbd.xyz",
        ]);
    }
}
