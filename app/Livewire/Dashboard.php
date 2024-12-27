<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class Dashboard extends Component
{

    #[On('link.created')]
    public function refresh(): void
    {
    }

    public function render()
    {
        $user = auth()->user();

        return view('livewire.dashboard', [
            'user' => $user,
            'links' => $user->links()->latest()->get()
        ]);
    }
}
