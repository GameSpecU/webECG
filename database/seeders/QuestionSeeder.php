<?php

namespace Database\Seeders;

use App\Models\Criterion;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    public function run()
    {
        Criterion::whereName('I_p_dir')->first()->question()->create(['contents' => 'Jaki jest kierunek załamka P w I']);
        Criterion::whereName('II_p_dir')->first()->question()->create(['contents' => 'Jaki jest kierunek załamka P w II']);
        Criterion::whereName('III_p_dir')->first()->question()->create(['contents' => 'Jaki jest kierunek załamka P w III']);
        Criterion::whereName('p_available')->first()->question()->create(['contents' => 'Czy załamek p jest widoczny']);

    }
}
