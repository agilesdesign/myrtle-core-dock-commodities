<?php

namespace Myrtle\Core\Commodities\Policies;

use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class CommoditiesPolicy
{
    use HandlesAuthorization;

    /**
     * Intercept all checks
     *
     * @return bool
     */
    public function before()
    {
        if (Gate::allows('admin', CommoditiesDockPolicy::class)) {
            return true;
        }
    }

    /**
     * Determine if the user can create address types
     *
     * @return bool
     */
    public function create()
    {
        return Gate::allows('create', CommoditiesDockPolicy::class);
    }

    /**
     * Determine if the user can delete one or all address types
     *
     * @return bool
     */
    public function delete()
    {
        return Gate::allows('delete', CommoditiesDockPolicy::class);
    }

    /**
     * Determine if the user can edit one or all address types
     *
     * @return bool
     */
    public function edit()
    {
        return Gate::allows('edit', CommoditiesDockPolicy::class);
    }

    /**
     * Determine if the user can view routes with lists of address types
     *
     * @return bool
     */
    public function list()
    {
        return Gate::allows('list', CommoditiesDockPolicy::class);
    }

    /**
     * Determine if the user can view one or all address types
     *
     * @return bool
     */
    public function view()
    {
        return Gate::allows('view', CommoditiesDockPolicy::class);
    }
}
