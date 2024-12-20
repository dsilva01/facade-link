<?php

namespace App\Livewire\Components;

use App\Actions\CreateNewLink;
use App\Data\StoreLinkDTOData;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Attributes\Locked;

class NewLinkModal extends Component
{
    #[Validate('required|url')]
    public string $destination_url;

    #[Validate('nullable')]
    public ?string $title;

    #[Locked]
    public string $user_id;

    public function mount()
    {
        $this->user_id = auth()->id();
    }

    public function store(CreateNewLink $createNewLink)
    {
        $this->validate();

        $dto = StoreLinkDTOData::from($this->all());

        $createNewLink->handle($dto);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.components.new-link-modal');
    }
}
