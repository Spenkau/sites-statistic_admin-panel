<?php

namespace App\Models;

use App\Traits\Model\ScopeFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory, SoftDeletes, ScopeFilter;

    protected $table = 'services';

    protected $guarded = false;

    public function serviceData(): HasMany
    {
        return $this->hasMany(ServiceData::class);
    }
}
