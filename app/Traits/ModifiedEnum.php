<?php

namespace App\Traits;

trait ModifiedEnum
{
    public function caseName(string $caseName): false|int|string
    {
        return array_search($caseName, $this::cases());
    }

    public function valueName(string $valueName): false|int|string
    {
        return array_search($valueName, $this::cases());
    }
}
