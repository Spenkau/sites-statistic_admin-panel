<?php

namespace App\Enums;

use App\Traits\ModifiedEnum;

enum RolesEnum: int
{
    use ModifiedEnum;

    case USER = 1;
    case ADMIN = 2;
}
