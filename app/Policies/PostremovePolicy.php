<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Borrow;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\Response;

class PostremovePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
    }
    public function delete(User $user,Borrow $borrow)
    {   
        if ($user->role=='admin' || $borrow->user_id==$user->id){
            return Response::allow();
        }
        return Response::deny('need authorization');
    }
}
