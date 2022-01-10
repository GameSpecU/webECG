<?php

namespace App\Http\Livewire;

use App\ECG\ECG;
use App\Models\Answer;
use Livewire\Component;
use App\Models\Question;
use App\ECG\ECGInterface;
use App\Collections\DisorderCollection;

class QuestionComponent extends Component
{


    public Question $question;

    public function mount(Question $question)
    {
        $this->question = $question;

    }

    public function render()
    {
        return view('livewire.question');
    }
}
