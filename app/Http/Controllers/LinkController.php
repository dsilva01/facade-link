<?php

namespace App\Http\Controllers;

use App\Actions\RecordVisit;
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
}
