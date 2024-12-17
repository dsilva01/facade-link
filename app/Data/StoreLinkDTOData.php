<?php

namespace App\Data;

use Spatie\LaravelData\Data;

class StoreLinkDTOData extends Data
{
  public function __construct(
    public string $user_id,
    public string $destination_url,
    public string $title,
  ) {
  }
}
