<?php

namespace App\Data;

use Spatie\LaravelData\Data;

class StoreLinkVisitDTOData extends Data
{
    public function __construct(
        public string $link_id,
        public ?string $ip_address,
        public ?string $referer_url,
        public string $visited_at,
    ) {}
}
