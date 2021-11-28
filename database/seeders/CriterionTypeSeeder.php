<?php

namespace Database\Seeders;

use App\Models\CriterionType;
use App\Enums\CriterionTypeEnum;
use Illuminate\Database\Seeder;

class CriterionTypeSeeder extends Seeder
{
    public function run()
    {
        foreach (CriterionTypeEnum::cases() as $case) {
            CriterionType::create(['type' => $case->value]);
        }
    }
}
