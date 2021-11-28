<?php

namespace Database\Seeders;

use App\Models\Disorder;
use Illuminate\Database\Seeder;

class DisorderSeeder extends Seeder
{
    public function run()
    {
        Disorder::create(['name'=> 'Swapped Electrodes']);
    }
}
