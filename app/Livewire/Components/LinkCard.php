<?php

namespace App\Livewire\Components;

use App\Models\Link;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy]
class LinkCard extends Component
{
    public $link;

    public function mount(string $id)
    {
        $this->link = Link::find($id);
    }
    public function render()
    {
        return view('livewire.components.link-card');
    }
}
