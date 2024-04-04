<?php

namespace App\Listeners;

use App\Events\UserCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UserCreatedListener
{
    /**
     * Handle the event.
     */
    public function handle(UserCreated $event): void
    {
        $user = $event->user;

        $roleEnum = $event->roleEnum;

        $user->roles()->syncWithoutDetaching([$roleEnum]);
    }
}
