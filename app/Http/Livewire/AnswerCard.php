<?php

namespace App\Http\Livewire;

use App\Models\Answer;
use Livewire\Component;

class AnswerCard extends Component
{
    public Answer $answer;
    public function mount(Answer $answer)
    {
        $this->answer = $answer;
    }

    public function chooseAnswer()
    {
        $this->emit( "sendAnswer", ['answer' => $this->answer]);
    }
    public function render()
    {
        return view('livewire.answer-card');
    }
}