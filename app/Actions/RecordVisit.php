<?php

namespace App\Actions;

use App\Data\StoreLinkVisitDTOData;
use App\Models\LinkVisit;

class RecordVisit
{
    public function handle(StoreLinkVisitDTOData $dto): LinkVisit
    {
        return LinkVisit::create($dto->toArray());
    }
}
