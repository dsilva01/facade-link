<?php

namespace App\Livewire;

use App\Models\Link;
use Livewire\Component;

class Dashboard extends Component
{
    public $links;

    public function mount()
    {
        $this->links = Link::where('user_id', auth()->id())->get();
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
