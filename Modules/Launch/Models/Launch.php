<?php

namespace Epigra\Launch\Models;

use Epigra\Launchpad\Models\Launchpad;
use Epigra\Payload\Models\Payload;
use Illuminate\Database\Eloquent\Model;

class Launch extends Model
{
    protected $fillable = [
        "id",
        "name",
        "success",
        "auto_update",
        'details',
        "provider_id",
        "launchpad_id"
    ];

    public function launchpad(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Launchpad::class);
    }

    public function Payload(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Payload::class);
    }
}
