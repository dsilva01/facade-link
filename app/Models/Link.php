<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Link extends Model
{
    use HasUuids;

    protected $fillable = [
        'user_id',
        'destination_url',
        'url_key',
        'title',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function link_visits(): HasMany
    {
        return $this->hasMany(LinkVisit::class, 'link_id');
    }
}
