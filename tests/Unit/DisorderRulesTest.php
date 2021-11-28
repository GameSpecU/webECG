<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Disorder;
use Database\Seeders\RuleSeeder;
use Database\Seeders\DisorderSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DisorderRulesTest extends TestCase
{
    public $seed = true;
    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
//        $this->seed(DisorderSeeder::class);
//        $this->seed(RulesSeeder::class);
    }
    public function testDisorderHavingRules()
    {
        $disorder = Disorder::whereName('Swapped Electrodes')->first();
        $rule     = $disorder->rules()
            ->whereRule('exclude_if:p_available,true|same:negative')
                        ->whereHas('criterion', function ($q) {
                            $q->where('name','I_p_dir');})
            ->first();
        $this->assertEquals('exclude_if:p_available,true|same:negative', $rule->rule);
        $this->assertEquals('I_p_dir', $rule->criterion->name);
    }

    use RefreshDatabase;


}