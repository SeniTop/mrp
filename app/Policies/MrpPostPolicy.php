<?php

namespace App\Policies;

use App\Models\User;
use App\Models\MrpPost;
use Illuminate\Auth\Access\HandlesAuthorization;

class MrpPostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the mrpPost can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list mrpposts');
    }

    /**
     * Determine whether the mrpPost can view the model.
     */
    public function view(User $user, MrpPost $model): bool
    {
        return $user->hasPermissionTo('view mrpposts');
    }

    /**
     * Determine whether the mrpPost can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create mrpposts');
    }

    /**
     * Determine whether the mrpPost can update the model.
     */
    public function update(User $user, MrpPost $model): bool
    {
        return $user->hasPermissionTo('update mrpposts');
    }

    /**
     * Determine whether the mrpPost can delete the model.
     */
    public function delete(User $user, MrpPost $model): bool
    {
        return $user->hasPermissionTo('delete mrpposts');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete mrpposts');
    }

    /**
     * Determine whether the mrpPost can restore the model.
     */
    public function restore(User $user, MrpPost $model): bool
    {
        return false;
    }

    /**
     * Determine whether the mrpPost can permanently delete the model.
     */
    public function forceDelete(User $user, MrpPost $model): bool
    {
        return false;
    }
}
