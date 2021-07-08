<?php

namespace Epigra\Payload\Models;

use Epigra\Launch\Models\Launch;
use Illuminate\Database\Eloquent\Model;

class Payload extends Model
{
    protected $fillable = [
        "provider_id",
        "orbit",
        "type",
        "name",
        "reused",
        "launch_id"
    ];

    public function launch(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Launch::class,'launch_id','provider_id');
    }
}
