<?php

namespace App\Livewire\Components;

use App\Actions\CreateNewLink;
use App\Data\StoreLinkDTOData;
use Livewire\Component;
use Livewire\Attributes\Locked;

class NewLinkModal extends Component
{
    public string $destination_url;

    public string $title = '';

    #[Locked]
    public string $user_id;

    public function store(CreateNewLink $createNewLink)
    {
        $validated = $this->validate([
            'destination_url' => 'required|max:100|url',
            'title' => ['nullable'],
            'user_id' => 'required|exists:users,id',
        ]);

        $dto = StoreLinkDTOData::from($validated);

        $createNewLink->handle($dto);

        $this->destination_url = '';
        $this->title = '';

        $this->dispatch('link.created');
        $this->dispatch('close.modal');
    }

    public function render()
    {
        return view('livewire.components.new-link-modal');
    }
}
