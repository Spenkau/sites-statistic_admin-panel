<?php

namespace App\Traits\Model;

use Illuminate\Database\Eloquent\Builder;

trait ScopeFilter
{
    protected ?string $filterClass = null;

    public function scopeFilter(Builder $query, array $params = []): Builder
    {
        return !is_null($class = $this->getScopeFilterClass())
            ? (new $class($query, $params))->filter()
            : $this->getScopeFilterDefault($query);
    }

    public function scopeSetFilterClass(Builder $builder, string $class): Builder
    {
        $this->filterClass = $class;

        return $builder;
    }

    protected function getScopeFilterDefault(Builder $query): Builder
    {
        return $query;
    }

    protected function getScopeFilterClass(): ?string
    {
        return $this->filterClass;
    }
}
