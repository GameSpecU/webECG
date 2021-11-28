<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DisorderSeeder::class);
        $this->call(CriterionTypeSeeder::class);
        $this->call(CriterionSeeder::class);
        $this->call(RuleSeeder::class);
        $this->call(QuestionSeeder::class);
        $this->call(AnswerSeeder::class);

    }
}
