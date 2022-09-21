<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProdukAdminPolicy
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

    public function add(User $user)
    {
        return ($user->status == 'admin'
        ? Response::allow()
        : Response::deny('Hanya admin yang dapat menambah')
    );
    }

    public function delete(User $user)
    {
        return ($user->status == 'admin'
        ? Response::allow()
        : Response::deny('Hanya admin yang dapat menghapus')
    );
    }

    public function change(User $user)
    {
        return ($user->status == 'admin'
        ? Response::allow()
        : Response::deny('Hanya admin yang dapat mengubah')
    );
    }
}
