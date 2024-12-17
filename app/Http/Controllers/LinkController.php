<?php

namespace App\Http\Controllers;

use App\Actions\CreateNewLink;
use App\Actions\RecordVisit;
use App\Data\StoreLinkDTOData;
use App\Http\Requests\StoreLinkRequest;
use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function __invoke(Request $request, RecordVisit $recordVisit, string $URLKey)
    {
        $link = Link::where('url_key', $URLKey)->firstOrFail();

        $recordVisit->handle($request, $link);

        return redirect($link->destination_url);
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
