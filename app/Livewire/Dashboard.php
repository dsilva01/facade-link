<?php

namespace App\Livewire;

use App\Models\Link;
use Livewire\Attributes\On;
use Livewire\Component;

class Dashboard extends Component
{
    #[On('link-created')]
    public function refresh(): void
    {
        //
    }

    public function render()
    {
        $user = auth()->user();
        $links = $user->links;

        return view('livewire.dashboard', [
            'links' => $links
        ]);
    }
}
