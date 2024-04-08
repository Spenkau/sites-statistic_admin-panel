<?php

namespace App\Filters;

use Ganimed\AnalystPackage\Filters\Interfaces\Composition;
use Illuminate\Database\Eloquent\Builder;

class ServiceFilter implements Composition
{
    /**
     * @param Builder $query
     * @param array $params
     */
    public function __construct(
        protected Builder $query,
        protected array $params = []
    ) {}

    /**
     * Make query by input params
     *
     * @return Builder
     */
    public function filter(): Builder
    {
        return $this->query;
    }
}
