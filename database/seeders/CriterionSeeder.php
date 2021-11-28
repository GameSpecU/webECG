<?php

namespace Database\Seeders;

use App\Models\Criterion;
use App\Models\CriterionType;
use Illuminate\Database\Seeder;
use App\Enums\CriterionTypeEnum;

class CriterionSeeder extends Seeder
{
    public function run()
    {
        $criteriaTypes_criteria = [CriterionTypeEnum::DIRECTION->value =>[
            'I_p_dir', 'II_p_dir', 'III_p_dir', 'aVL_p_dir', 'aVR_p_dir', 'aVF_p_dir'
        ],
            CriterionTypeEnum::BOOLEAN->value => ['p_available']
        ];

        foreach ($criteriaTypes_criteria as $Criterion_type => $criteria) {
            foreach ($criteria as $criterion) {
            $criterionType = CriterionType::whereType($Criterion_type)->first();
            Criterion::create(['name' => $criterion, 'criterion_type_id' => $criterionType->id]);
            }
        }
    }
}
