<?php

namespace App\Http\Livewire\Answers;

use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;
use function view;

class ButtonAnswerCard extends AnswerCard
{

    public function render() : Application|Factory|View
    {
        return view('livewire.button-answer-card');
    }

    public function prepareAnswer()
    {
        return $this->answer->contents;
    }
}
