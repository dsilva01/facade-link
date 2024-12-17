<?php

namespace App\Livewire;

use App\Models\Link;
use Livewire\Component;

class Dashboard extends Component
{
    public $links;

    public function mount()
    {
        $this->links = Link::all();
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
