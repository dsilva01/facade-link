<?php

namespace App\Http\Controllers;

use App\Actions\CreateNewLink;
use App\Data\StoreLinkDTOData;
use App\Data\StoreLinkVisitDTOData;
use App\Http\Requests\StoreLinkRequest;
use App\Jobs\RecordVisitJob;
use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function __invoke(Request $request, string $URLKey)
    {
        $link = Link::where('url_key', $URLKey)->firstOrFail();

        $dto = StoreLinkVisitDTOData::from([
            'link_id' => $link->id,
            'ip_address' => $request->ip(),
            'referer_url' => $request->headers->get('referer'),
            'visited_at' => now()
        ]);

        RecordVisitJob::dispatch($dto);

        return redirect()->away($link->destination_url);
    }

    public function store(StoreLinkRequest $request, CreateNewLink $createNewLink)
    {
        $dto = StoreLinkDTOData::from([
            'user_id' => $request->user()->id,
            'destination_url' => $request->destination_url,
        ]);

        $createNewLink->handle($dto);

        return redirect()->route('dashboard');
    }
}
