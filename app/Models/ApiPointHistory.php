<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ApiPointHistory extends Model
{
    use HasFactory;

    protected $table = 'api_points_history';

    protected $fillable = [
        'api_point_id',
        'status_code',
        'response_time'
    ];

    public function apiPoint(): BelongsTo
    {
        return $this->belongsTo(ApiPoint::class);
    }
}
