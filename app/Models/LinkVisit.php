<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LinkVisit extends Model
{
    protected $fillable = [
        'link_id',
        'ip_address',
        'operating_system',
        'operating_system_version',
        'browser',
        'browser_version',
        'referer_url',
        'device_type',
        'visited_at'
    ];

    public function link(): BelongsTo
    {
        return $this->belongsTo(Link::class, 'link_id');
    }
}
