<?php

namespace App\ECG;

use App\Models\Question;
use App\Models\Disorder;

class ECG implements ECGInterface
{
    protected array $answers;

    public function __construct()
    {
        $this->answers = [];
    }


    public function nextQuestion(): Question
    {
        $matchedDisorders = Disorder::matching($this->answers)->get();
        $matchedCriteria   = $matchedDisorders->criteria()->keyBy('name');

        $remainingCriteria = $matchedCriteria->diffKeys($this->answers);

        //TODO:sortBy count of disorders

        return $remainingCriteria->first()->question;
    }


    public function setAnswers(array $answers)
    {
        $this->answers = $answers;
    }
}