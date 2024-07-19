<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {

    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, User $model): bool
    {
        //
    }

    public function create(User $user): bool
    {
        return $user->email === "rice.drake@example.net";
    }

    public function edit(User $user, User $model): bool
    {
        return  (bool) mt_rand(0,1);
    }

    public function delete(User $user, User $model): bool
    {
        //
    }
    public function restore(User $user, User $model): bool
    {
        //
    }


    public function forceDelete(User $user, User $model): bool
    {
        //
    }
}
