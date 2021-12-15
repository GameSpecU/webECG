<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class Home extends Component
{


    public function render(): Factory|View|Application
    {
        return view('livewire.home');
    }
}
