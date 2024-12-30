<?php

namespace App\Livewire\Components;

use Livewire\Attributes\Validate;
use Livewire\Component;

class LinkShortener extends Component
{
    #[Validate('required|max:100|url')]
    public string $destination_url;

    public function render()
    {
        return view('livewire.components.link-shortener');
    }
}
