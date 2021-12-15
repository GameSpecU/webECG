<?php

namespace Tests\Feature;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AppTest extends DuskTestCase
{
    use RefreshDatabase;

    public function testBasic()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testUserCanSeeQuestion()
    {
        $response = $this->get('/');
        $response->assertSee('Jaki jest kierunek załamka P w I');
    }

    public function testUserCanSeeAnswers()
    {
        $response = $this->get('/');
        $response->assertSee(['positive', 'negative', 'biphase']);
    }

    public function testUserCanAnswerTheQuestion()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
               ->press('negative')
               ->waitForText('Jaki jest kierunek załamka P w II')
               ->assertSee('Jaki jest kierunek załamka P w II');
        });
    }

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }
}
