<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\UserRepository;
use Ganimed\AnalystPackage\Services\UserService as BaseUserService;

class UserService extends BaseUserService
{
//    public function __construct(public UserRepository $userRepository) {
//        parent::__construct(parent::$userRepository);
//    }

    public function editRole(User $user, $role)
    {
        return $this->userRepository->editRole($user, $role);
    }
}
