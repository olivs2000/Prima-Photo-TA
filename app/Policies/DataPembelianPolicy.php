<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DataPembelianPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function view(User $user)
    {
        return ($user->status == 'admin'
        ? Response::allow()
        : Response::deny('Hanya admin yang dapat membuka.')
    );
    }
}
