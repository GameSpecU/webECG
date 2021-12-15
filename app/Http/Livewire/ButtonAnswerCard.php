<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class ButtonAnswerCard extends AnswerCard
{

    public function render() : Application|Factory|View
    {
        return view('livewire.button-answer-card');
    }
}