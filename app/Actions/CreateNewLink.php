<?php

namespace App\Actions;

use App\Data\StoreLinkDTOData;
use App\Models\Link;
use Illuminate\Support\Str;

class CreateNewLink
{
    public function handle(StoreLinkDTOData $dto): Link
    {
        $data = $dto->toArray();

        $data['url_key'] = $this->generateKey();

        return Link::create($data);
    }

    private function generateKey(): string
    {
        do {

            $key = Str::random(6);

        } while (Link::where('url_key', $key)->exists());

        return $key;
    }
}
