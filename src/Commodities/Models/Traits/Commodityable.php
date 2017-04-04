<?php

namespace Myrtle\Core\Commodities\Models\Traits;

use Illuminate\Database\Eloquent\Builder;
use Myrtle\Commodities\Models\Commodity;

trait Commodityable
{
    /**
     * Get all of the owning model's commodities.
     */
    public function commodities()
    {
        return $this->morphToMany(Commodity::class, 'commodityable');
    }

    /**
     * Scope owning model by commodities
     * @param Builder $query
     * @param mixed $ids
     *
     * @return Builder
     */
    public function scopeByCommodities(Builder $query, $ids = null)
    {
        if (empty($ids)) {
            return $query;
        }

        return $query->whereHas('commodities', function ($q) use ($ids) {
            $q->whereIn('id', $ids);
        });
    }
}