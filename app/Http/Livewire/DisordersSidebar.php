<?php

namespace App\Http\Livewire;

use App\ECG\ECG;
use Livewire\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use App\Collections\DisorderCollection;
use Illuminate\Contracts\Foundation\Application;

class DisordersSidebar extends Component
{

    public ECG $ECG;
    public array $disorders;
    protected $listeners = ['refreshSidebar' => '$refresh',];

    public function mount(array $disorders)
    {
        $this->disorders = $disorders;
    }

//    public function refresh()
//    {
//        $this->render();
//}

    public function render(): Factory|View|Application
    {
        return view('livewire.disorders-sidebar');
    }
}
