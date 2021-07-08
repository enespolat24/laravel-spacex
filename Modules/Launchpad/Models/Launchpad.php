<?php

namespace Epigra\Launchpad\Models;

use Epigra\Launch\Models\Launch;
use Illuminate\Database\Eloquent\Model;

class Launchpad extends Model
{
    protected $fillable = [
        "id",
        "provider_id",
        "status",
        "name",
        "payloads",
        "full_name",
        'locality',
        "region",
        "timezone",
        "latitude",
        "longitude",
        "launch_attempts",
        "launch_successes"
    ];

    public function launch(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Launch::class,'launch_id','provider_id');
    }
}
