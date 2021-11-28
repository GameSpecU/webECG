<?php

namespace App\ECG;

interface ECGInterface
{


    public function nextQuestion();// : Question;


    public function setAnswers(array $answers);
}