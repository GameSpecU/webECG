<?php

namespace App\Http\Livewire;

use App\ECG\ECG;
use Livewire\Component;
use App\Models\Question;
use App\Collections\DisorderCollection;

class ECGComponent extends Component
{
    public ECG $ECG;
    public array $disorders;
    public Question $question;

    protected $listeners = [
        'sendAnswer',
    ];

    public function sendAnswer($value): void
    {
        $this->ECG->addAnswer($this->question->criterion->name, $value);
        $this->fetchNewQuestion();
    }

    protected function fetchNewQuestion()
    {
        $this->question = $this->ECG->nextQuestion();
        $this->disorders = $this->ECG->getDisordersWithValidationInfo()->toArray();
//        $this->emit('refreshSidebar');
    }
    public function mount(ECG $ECG)
    {
        $this->ECG = $ECG;
        $this->fetchNewQuestion();
    }
    public function render()
    {
        return view('livewire.e-c-g-component');
    }
}
