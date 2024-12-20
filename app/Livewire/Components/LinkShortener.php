<?php

namespace App\Livewire\Components;

use Livewire\Attributes\Validate;
use Livewire\Component;

class LinkShortener extends Component
{
    #[Validate('required|url')]
    public $destination_url;

    public function render()
    {
        return view('livewire.components.link-shortener');
    }
}
