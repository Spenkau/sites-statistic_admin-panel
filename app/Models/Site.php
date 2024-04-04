<?php

namespace App\Models;

use App\Filters\SiteFilter;
use App\Traits\Model\ScopeFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Site extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'sites';

    private array $notificationsPivot = ['telegram_channel', 'whatsapp_channel', 'sms_channel', 'email_channel'];

    protected $fillable = [
        'name',
        'url',
        'comment',
        'user_id'
    ];

    public function pages(): HasMany
    {
        return $this->hasMany(Page::class);
    }

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'site_user');
    }

    public function userNotifications(int $userId): User
    {
        return $this->belongsToMany(User::class, 'site_user')
            ->withPivot($this->notificationsPivot)
            ->where('user_id', $userId)
            ->first();
    }

    public function getChannelsAttribute(): array
    {
        return [
            'telegram_channel' => $this->pivot->telegram_channel,
            'whatsapp_channel' => $this->pivot->whatsapp_channel,
            'sms_channel' => $this->pivot->sms_channel,
            'email_channel' => $this->pivot->email_channel,
        ];
    }

}
