<?php

namespace Tests\ECG;

use App\ECG\ECG;
use Tests\TestCase;

class ECGTest extends TestCase
{

    private mixed $ECG;

    public function testFirstQuestion()
    {
        $question = $this->ECG->nextQuestion();
        $this->assertModelExists($question);
    }

    public function testNextQuestion()
    {
        $firstQuestion = $this->ECG->nextQuestion();
        $this->ECG->addAnswer($firstQuestion, $firstQuestion->answers()->first());
        $secondQuestion = $this->ECG->nextQuestion();
        $this->assertModelExists($secondQuestion);
        $this->assertNotEquals($firstQuestion, $secondQuestion);
    }

    protected function setUp(): void
    {
        $this->ECG = resolve(ECG::class);
        parent::setUp();
    }
}
