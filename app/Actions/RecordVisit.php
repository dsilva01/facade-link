<?php

namespace App\Actions;

use App\Models\Link;
use App\Models\LinkVisit;
use Illuminate\Http\Request;

class RecordVisit
{
    public function handle(Request $request, Link $link): LinkVisit
    {
        return LinkVisit::create([
            'link_id' => $link->id,
            'ip_address' => $request->ip(),
            'referer_url' => $request->headers->get('referer'),
            'visited_at' => now(),
        ]);
    }
}
