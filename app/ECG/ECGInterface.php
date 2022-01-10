<?php

namespace App\ECG;

use Livewire\Wireable;
use App\Models\Answer;
use App\Models\Question;

interface ECGInterface extends Wireable
{


    public function nextQuestion();// : Question;


    public function addAnswer($criterionName, $answerContents);
}
