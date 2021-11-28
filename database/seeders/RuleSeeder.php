<?php

namespace Database\Seeders;

use App\Models\Rule;
use App\Models\Disorder;
use App\Models\Criterion;
use Illuminate\Database\Seeder;

class RuleSeeder extends Seeder
{
    private array $disorders_criteria_rules = [
        'Swapped Electrodes' => [
            'I_p_dir'     => 'exclude_if:p_available,true|in:negative',
            'II_p_dir'    => 'exclude_if:p_available,true|in:positive',
            'aVL_p_dir'   => 'exclude_if:p_available,true|in:negative',
            'aVR_p_dir'   => 'exclude_if:p_available,true|in:positive',
            'p_available' => 'boolean'
        ]
    ];

    public function run()
    {
        foreach ($this->disorders_criteria_rules as $disorderName => $criteria_rules) {
            foreach ($criteria_rules as $criterionName => $ruleName) {
                $criterion = Criterion::where(['name' => $criterionName])->first();
                $criterion->save();
                $disorder = Disorder::whereName($disorderName)->first();
                $rule = Rule::make(['rule' => $ruleName]);
                $rule->criterion()->associate($criterion);
                $rule->disorder()->associate($disorder);
                $rule->save();
            }
        }
    }
}
