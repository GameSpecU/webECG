<?php

namespace App\ECG;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Disorder;

class ECG implements ECGInterface
{
    protected array $answers;

    public function __construct(array $answers = [])
    {
        $this->answers = $answers;
    }

    public function addAnswer(Question $question, Answer $answer)
    {
        $this->answers = array_merge($this->answers, [$question->criterion->name => $answer->contents]);
    }

    public static function fromLivewire($value): static
    {
        return new static($value);
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
}
