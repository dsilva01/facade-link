<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasUuids;

    protected $fillable = [
        'user_id',
        'destination_url',
        'url_key',
        'title',
    ];
}
