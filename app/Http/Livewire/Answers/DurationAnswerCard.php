<?php

namespace App\Http\Livewire\Answers;

use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class DurationAnswerCard extends AnswerCard
{
    public int $duration = 120;

    public function applyRange()
    {
        $this->answer->contents = $this->duration;
        $this->chooseAnswer();
    }
    public function render() : Application|Factory|View
    {
        return view('livewire.answers.duration-answer-card');
    }

    public function prepareAnswer()
    {
        return $this->duration;
    }
}

