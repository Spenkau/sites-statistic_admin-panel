<?php

namespace App\Models;

use App\Filters\SiteFilter;
use App\Traits\Model\ScopeFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ApiPoint extends Model
{
    use HasFactory, ScopeFilter;

    public $timestamps;

    protected $table = 'api_points';

    protected $fillable = [
        'name',
        'url',
        'request_data',
        'response_data',
        'service'
    ];
    protected $guarded = false;

    public function apiHistories(): HasMany
    {
        return $this->hasMany(ApiPointHistory::class);
    }
}
