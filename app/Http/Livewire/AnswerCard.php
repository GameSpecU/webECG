<?php

namespace App\Http\Livewire;

use App\Models\Answer;
use Livewire\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

abstract class AnswerCard extends Component
{
    public Answer $answer;

    public function mount(Answer $answer)
    {
        $this->answer = $answer;
    }

    public function chooseAnswer()
    {
        $this->emit('sendAnswer', ['answer' => $this->answer]);
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.answer-card');
    }
}