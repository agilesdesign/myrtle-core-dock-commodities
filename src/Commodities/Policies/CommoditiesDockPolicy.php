<?php

namespace Myrtle\Core\Commodities\Policies;

use App\User;
use Myrtle\Commodities\Models\Commodity;
use Myrtle\Docks\CommoditiesDock;
use Illuminate\Auth\Access\HandlesAuthorization;

class CommoditiesDockPolicy
{
    use HandlesAuthorization;

    /**
     * Determine if the user has access to Commodities Dock Administrative Routes
     *
     * @param  \App\User $user
     * @return bool
     */
    public function accessAdmin(User $user)
    {
        return $user->allPermissions->contains(function ($ability) use ($user) {
            return $ability->name === CommoditiesDock::class . '.access-admin';
        });
    }

    /**
     * Determine if the user has Administrator privileges
     *
     * @param  \App\User $user
     * @return bool
     */
    public function admin(User $user)
    {
        return $user->allPermissions->contains(function ($ability) {
            return $ability->name === CommoditiesDock::class . '.admin';
        });
    }

    /**
     * Determine if the user can create commodities
     *
     * @param  \App\User $user
     * @return bool
     */
    public function create(User $user)
    {
        return $user->allPermissions->contains(function ($ability) {
            return $ability->name === CommoditiesDock::class . '.' . Commodity::class . '.create';
        });
    }

    /**
     * Determine if the user can delete commodities
     *
     * @param  \App\User $user
     * @return bool
     */
    public function edit(User $user)
    {
        return $user->allPermissions->contains(function ($ability) {
            return $ability->name === CommoditiesDock::class . '.' . Commodity::class . '.edit';
        });
    }

    /**
     * Determine if the user can delete commodities
     *
     * @param  \App\User $user
     * @return bool
     */
    public function delete(User $user)
    {
        return $user->allPermissions->contains(function ($ability) {
            return $ability->name === CommoditiesDock::class . '.' . Commodity::class . '.delete';
        });
    }

    /**
     * Determine if the user can delete commodities
     *
     * @param  \App\User $user
     * @return bool
     */
    public function list(User $user)
    {
        return $user->allPermissions->contains(function ($ability) {
            return $ability->name === CommoditiesDock::class . '.' . Commodity::class . '.list';
        });
    }

    /**
     * Determine if the user can view commodities
     *
     * @param  \App\User $user
     * @return bool
     */
    public function seed(User $user)
    {
        return $user->allPermissions->contains(function () use ($user) {
            return $this->admin($user);
        });
    }

    /**
     * Determine if the user can view commodities
     *
     * @param  \App\User $user
     * @return bool
     */
    public function view(User $user)
    {
        return $user->allPermissions->contains(function ($ability) {
            return $ability->name === CommoditiesDock::class . '.' . Commodity::class . '.view';
        });
    }

    /**
     * Determine if the user can edit Dock Settings
     *
     * @param  \App\User $user
     * @return bool
     */
    public function editSettings(User $user)
    {
        return $user->allPermissions->contains(function ($ability) {
            return $ability->name === CommoditiesDock::class . '.edit-settings';
        });
    }

    /**
     * Determine if the user can view Dock Settings
     *
     * @param  \App\User $user
     * @return bool
     */
    public function viewSettings(User $user)
    {
        return $user->allPermissions->contains(function ($ability) {
            return $ability->name === CommoditiesDock::class . '.view';
        });
    }

    /**
     * Determine if the user can edit Dock Permissions
     *
     * @param  \App\User $user
     * @return bool
     */
    public function editPermissions(User $user)
    {
        return $user->allPermissions->contains(function ($ability) {
            return $ability->name === CommoditiesDock::class . '.edit-settings';
        });
    }

    /**
     * Determine if the user can view Dock Permissions
     *
     * @param  \App\User $user
     * @return bool
     */
    public function viewPermissions(User $user)
    {
        return $user->allPermissions->contains(function ($ability) {
            return $ability->name === CommoditiesDock::class . '.view';
        });
    }
}
