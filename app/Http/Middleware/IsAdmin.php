<?php

namespace App\Http\Middleware;

use App\Enums\RolesEnum;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
//        dd($request->user()->isAdmin(), RolesEnum::ADMIN);
        if ($request->user()->isAdmin() === RolesEnum::ADMIN) {
            return $next($request);
        }

        return redirect()->to('/')->with(['status' => 'not-admin']);
    }
}
