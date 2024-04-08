<?php

namespace App\Models;

use Ganimed\AnalystPackage\Traits\Model\ScopeFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceData extends Model
{
    use HasFactory, SoftDeletes, ScopeFilter;

    protected $table = 'services_data';

    protected $guarded = false;

//    protected $casts = [
//        'params' => 'array',
//        'success_response' => 'array',
//        'error_response' => 'array',
//    ];

    public function services(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }
}
