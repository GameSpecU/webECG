<?php

namespace App\Http\Livewire;

use App\ECG\ECG;
use Livewire\Component;
use App\ECG\ECGInterface;
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