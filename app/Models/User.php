<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Enums\RolesEnum;
use Ganimed\AnalystPackage\Models\User as BaseUser;

class User extends BaseUser
{
    public function isAdmin(): RolesEnum
    {
        return RolesEnum::from($this->roles()->first()->pivot->role_id);
    }
}
