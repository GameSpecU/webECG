<?php

namespace Database\Seeders;

use App\Models\CriterionType;
use Illuminate\Database\Seeder;
use App\Enums\CriterionTypeEnum;

class CriterionTypeSeeder extends Seeder
{
    public function run()
    {
        foreach (CriterionTypeEnum::cases() as $case) {
            CriterionType::create(['type' => $case->value]);
        }
    }
}
