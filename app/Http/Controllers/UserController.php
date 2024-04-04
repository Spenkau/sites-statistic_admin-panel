<?php

namespace App\Http\Controllers;

use App\Enums\RolesEnum;
use App\Events\UserCreated;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        $users = User::query()->with('roles')->paginate(10);

        return view('user.index', ['users' => $users]);
    }

    public function show(User $user): View
    {
        $user = User::query()->where('id', $user->id)->with('personalSites')->first();

        $roles = Role::query()->get();

        return view('user.show', ['user' => $user, 'roles' => $roles]);
    }

    public function editRole(User $user, Role $role): View
    {
        return view('user.edit-role', $user);
    }

    public function updateRole(User $user, RolesEnum $roleEnum): JsonResponse
    {
        event(new UserCreated($user, $roleEnum));

        return response()->json(['message' => 'Роль изменена на ' . $roleEnum->name]);
    }

    public function destroy(User $user): ?bool
    {
        return $user->delete();
    }
}
