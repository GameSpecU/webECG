<?php

namespace App\Http\Livewire\Answers;

use App\Models\Answer;
use Livewire\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;
use function view;

abstract class AnswerCard extends Component implements Answerable
{
    public Answer $answer;

    public function mount(Answer $answer)
    {
        $this->answer = $answer;
    }

    public function chooseAnswer()
    {
        $value = $this->prepareAnswer();
        $this->emit('sendAnswer', $value);
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.answer-card');
    }
}
