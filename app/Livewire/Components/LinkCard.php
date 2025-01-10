<?php

namespace App\Livewire\Components;

use App\Models\Link;
use Livewire\Attributes\Locked;
use Livewire\Component;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class LinkCard extends Component
{
    #[Locked]
    public string $linkId;

    public function render()
    {
        $link = Link::where('id', $this->linkId)
        ->withCount('link_visits')
        ->firstOrFail();
        
        return view('livewire.components.link-card', [
            'link' => Link::where('id', $this->linkId)
                ->withCount('link_visits')
                ->firstOrFail(),
                // 'qr_code' => $renderer
            'qr_code' => QrCode::format('png')->size(300)->generate($link->destination_url),
        ]);
    }
}
