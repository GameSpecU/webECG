<?php

namespace Database\Seeders;

use App\Models\CriterionType;
use Illuminate\Database\Seeder;
use App\Enums\CriterionTypeEnum;

class AnswerSeeder extends Seeder
{


    public function run()
    {
        $criterionType_answers = [
            CriterionTypeEnum::DIRECTION->value => ['positive', 'negative', 'biphase',],
            CriterionTypeEnum::BOOLEAN->value => ['true', 'false']
        ];
        foreach ($criterionType_answers as $criterionType => $answers) {
            foreach ($answers as $answer) {
                CriterionType::whereType($criterionType)->first()->answers()->create(['contents' => $answer]);
            }
        }
    }
}
