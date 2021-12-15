<?php

namespace App\Http\Livewire;

use App\ECG\ECG;
use App\Models\Answer;
use Livewire\Component;
use App\Models\Question;
use App\ECG\ECGInterface;

class QuestionComponent extends Component
{
    public Question $question;
//    public array $answers;
    protected $listeners = [
        'sendAnswer',
    ];
    public ECG $ECG;

    public function sendAnswer(Answer $answer)
    {
        $this->ECG->addAnswer($this->question, $answer);
        $this->fetchNewQuestion();
    }

    protected function fetchNewQuestion()
    {
        $this->question = $this->ECG->nextQuestion();
    }



    public function mount(ECG $ECG)
    {
        $this->ECG = $ECG;

        $this->fetchNewQuestion();
    }

    public function render()
    {
        return view('livewire.question');
    }
}