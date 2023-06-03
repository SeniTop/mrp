<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Persetujuan;
use Illuminate\Auth\Access\HandlesAuthorization;

class PersetujuanPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the persetujuan can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list persetujuans');
    }

    /**
     * Determine whether the persetujuan can view the model.
     */
    public function view(User $user, Persetujuan $model): bool
    {
        return $user->hasPermissionTo('view persetujuans');
    }

    /**
     * Determine whether the persetujuan can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create persetujuans');
    }

    /**
     * Determine whether the persetujuan can update the model.
     */
    public function update(User $user, Persetujuan $model): bool
    {
        return $user->hasPermissionTo('update persetujuans');
    }

    /**
     * Determine whether the persetujuan can delete the model.
     */
    public function delete(User $user, Persetujuan $model): bool
    {
        return $user->hasPermissionTo('delete persetujuans');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete persetujuans');
    }

    /**
     * Determine whether the persetujuan can restore the model.
     */
    public function restore(User $user, Persetujuan $model): bool
    {
        return false;
    }

    /**
     * Determine whether the persetujuan can permanently delete the model.
     */
    public function forceDelete(User $user, Persetujuan $model): bool
    {
        return false;
    }
}
