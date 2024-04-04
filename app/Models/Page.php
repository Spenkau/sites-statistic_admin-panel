<?php

namespace App\Models;

use App\Filters\PageFilter;
use App\Traits\Model\ScopeFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'pages';

    protected $fillable = [
        'url',
        'threshold_speed',
        'page_id',
        'site_id',
        'comment'
    ];

    public function site(): BelongsTo
    {
        return $this->belongsTo(Site::class);
    }

    public function children(): HasMany
    {
        return $this->hasMany(self::class, 'parent_id')
            ->with('children', 'details');
    }

    public function details(): HasMany
    {
        return $this->hasMany(Detail::class);
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_page');
    }
}
