<?php

namespace App\Livewire\Components;

use App\Models\Link;
use Livewire\Attributes\Locked;
use Livewire\Component;

class LinkCard extends Component
{
    #[Locked]
    public string $linkId;

    public function render()
    {
        return view('livewire.components.link-card', [
            'link' => Link::where('id', $this->linkId)
                ->withCount('link_visits')
                ->firstOrFail(),
        ]);
    }
}
