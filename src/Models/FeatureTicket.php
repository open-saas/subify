<?php

namespace LucasDotDev\Soulbscription\Models;

use Illuminate\Database\Eloquent\Model;
use LucasDotDev\Soulbscription\Models\Concerns\Expires;

class FeatureTicket extends Model
{
    use Expires;

    protected $fillable = [
        'charges',
        'expired_at',
    ];

    public function feature()
    {
        return $this->belongsTo(config('soulbscription.models.feature'));
    }

    public function subscriber()
    {
        return $this->morphTo('subscriber');
    }
}
