<?php

namespace App\Policies;

use App\Models\User;
use App\Models\clients;
use Illuminate\Auth\Access\HandlesAuthorization;

class ClientsPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\clients  $clients
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, clients $clients)
    {
        
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user,clients $clients)
    {
         //
    }

        /**
     * Determine whether the user can Edit  models.
     *
     * 
     * 
     */

    public function edit(User $user,clients $clients)
    {
        if($user->is_admin === true)
        {
            return true;
        }
    return false;

    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\clients  $clients
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, clients $clients)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\clients  $clients
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, clients $clients)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\clients  $clients
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, clients $clients)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\clients  $clients
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, clients $clients)
    {
        //
    }
}
