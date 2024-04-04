<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Enums\RolesEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'role_user');
    }

    public function isAdmin(): RolesEnum
    {
        return RolesEnum::from($this->roles()->first()->pivot->role_id);
    }

    public function notifications(): HasMany
    {
        return $this->hasMany(Notification::class);
    }

    public function personalSites(): HasMany
    {
        return $this->hasMany(Site::class);
    }

    public function publicSites(string|array $relations = []): BelongsToMany
    {
        return $this->belongsToMany(Site::class, 'site_user')
            ->with($relations);
    }

    public function siteNotifications(int $siteId)
    {
        return $this->belongsToMany(Site::class, 'site_user')
            ->where('site_id', $siteId)
            ->withPivot($this->notificationsPivot)
            ->first();
    }
}
