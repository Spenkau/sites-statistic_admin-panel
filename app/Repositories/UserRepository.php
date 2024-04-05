<?php

namespace App\Repositories;

use App\Models\User;
use Ganimed\AnalystPackage\Repositories\UserRepository as BaseUserRepository;

class UserRepository extends BaseUserRepository
{
    public function editRole(User $user, $role)
    {
        return $user->syncWithoutDetaching($role);
    }
}
