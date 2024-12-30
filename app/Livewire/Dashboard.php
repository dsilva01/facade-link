<?php

namespace App\Livewire;

use App\Models\Link;
use Livewire\Attributes\On;
use Livewire\Component;

class Dashboard extends Component
{
    public function deleteLink(string $linkId): void
    {
        $link = Link::findOrFail($linkId);

        $this->authorize('delete', $link);

        if ($link->delete()) {
            $this->dispatch('link.destroyed');
        }
    }

    #[On('link.created')]
    #[On('link.destroyed')]
    public function refresh(): void {}

    public function render()
    {
        $user = auth()->user();

        return view('livewire.dashboard', [
            'user' => $user,
            'links' => $user->links()->latest()->get(),
        ]);
    }
}
