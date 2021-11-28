<?php

namespace App\Http\Livewire;

use App\Models\Answer;
use Livewire\Component;
use App\Models\Question;
use App\ECG\ECGInterface;

class QuestionComponent extends Component
{
    public Question        $question;
    public array           $answers;
    protected              $listeners = [
        'sendAnswer',
    ];
    protected ECGInterface $ECG;
public function __construct($id = null)
{
    parent::__construct($id);
}

    public function sendAnswer(Answer $answer)
    {
        $this->answers = array_merge($this->answers, [$this->question->criterion->name => $answer->contents]);
        $this->ECG->setAnswers($this->answers);
        $this->fetchNewQuestion();
    }

    protected function fetchNewQuestion()
    {
        $this->question = $this->ECG->nextQuestion();
    }

    public function boot(ECGInterface $ECG)
    {
        $this->ECG = $ECG;
    }

    public function mount()
    {
        $this->answers = [];

        $this->fetchNewQuestion();
    }

    public function render()
    {
        return view('livewire.question');
    }
}