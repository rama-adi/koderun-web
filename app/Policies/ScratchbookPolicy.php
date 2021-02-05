<?php

namespace App\Policies;

use App\Enums\ScratchbookVisibility;
use App\Models\Scratchbook;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;


class ScratchbookPolicy
{
    use HandlesAuthorization;
    const SCRATCHBOOK_PUBLIC = ScratchbookVisibility::PUBLIC;
    const SCRATCHBOOK_PRIVATE = ScratchbookVisibility::PRIVATE;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Scratchbook  $scratchbook
     * @return mixed
     */
    public function view(User $user, Scratchbook $scratchbook)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Scratchbook  $scratchbook
     * @return mixed
     */
    public function update(User $user, Scratchbook $scratchbook)
    {
       if($user->currentTeam->id === $scratchbook->team_id){
           return Response::allow();
       }else{
           return Response::deny('Anda tidak memiliki akses mengedit ini!');
       }
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Scratchbook  $scratchbook
     * @return mixed
     */
    public function delete(User $user, Scratchbook $scratchbook)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Scratchbook  $scratchbook
     * @return mixed
     */
    public function restore(User $user, Scratchbook $scratchbook)
    {
        //
    }

    /**
     * Determine whether the user can star the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Scratchbook  $scratchbook
     * @return mixed
     */
    public function star(User $user, Scratchbook $scratchbook)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Scratchbook  $scratchbook
     * @return mixed
     */
    public function forceDelete(User $user, Scratchbook $scratchbook)
    {
        //
    }
}