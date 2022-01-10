<?php

namespace App\ECG;

use App\Models\Rule;
use App\Models\Question;
use App\Models\Disorder;
use App\Collections\DisorderCollection;

class ECG implements ECGInterface
{
    protected array $answers;

    public function __construct(array $answers = [])
    {
        $this->answers = $answers;
    }

    public static function fromLivewire($value): static
    {
        return new static($value);
    }

    public function addAnswer($criterionName, $answerContents)
    {
        $this->answers = array_merge($this->answers, [$criterionName => $answerContents]);
    }

    public function nextQuestion(): Question
    {
        $matchedDisorders = Disorder::matching($this->answers)->get();
        $matchedCriteria  = $matchedDisorders->criteria()->keyBy('name');

        $remainingCriteria = $matchedCriteria->diffKeys($this->answers);

        //TODO:sortBy count of disorders

        return $remainingCriteria->first()->question;
    }

    public function toLivewire(): array
    {
        return $this->answers;
    }

    public function getDisordersWithValidationInfo(): DisorderCollection
    {
        $disorders = Disorder::with(['rules', 'rules.criterion'])->get();
        $disorders->map(function (Disorder $disorder) {

            $count = 0;
            $disorder->rules->map(function (Rule $rule) use (&$count) {
                $rule->valid = $rule->passes($this->answers);
                if ($rule->valid)
                    $count++;
                return $rule;
            });
            $disorder->rules_passes = $count;
        });
        return $disorders;
    }
}
