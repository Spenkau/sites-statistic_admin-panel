<?php

namespace App\Http\Controllers;

use App\Enums\RolesEnum;
use App\Events\UserCreated;
use App\Models\Role;
use App\Models\User;
use App\Services\UserService;
use Ganimed\AnalystPackage\Services\SiteService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{

    public function __construct(
        public SiteService $siteService,
        public UserService $userService
    ) {}

    public function index(): View
    {
        $users = User::query()->with('roles')->paginate(10);

        return view('user.index', ['users' => $users]);
    }

    public function show(User $user, Request $request): View
    {
        $user = User::query()->where('id', $user->id)->with('personalSites')->first();

        $sites = $this->siteService->paginated($request);

        $roles = Role::query()->get();

        return view('user.show', ['user' => $user, 'roles' => $roles, 'sites' => $sites]);
    }

    public function editRole(User $user): View
    {
        $user = $user->load('roles');

        return view('user.edit-role', ['user' => $user]);
    }

    public function updateRole(User $user, Request $request): string
    {
        $roleId = $request->input('role');

        $user->roles()->sync([$roleId]);

        return response()->json(['message' => 'Роль изменена на ' . RolesEnum::fromInt($roleId)]);
    }

    public function destroy(User $user): ?bool
    {
        return $user->delete();
    }
}
