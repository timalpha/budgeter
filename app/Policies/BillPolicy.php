<?php

namespace App\Policies;

use App\User;
use App\Bill;

use Illuminate\Auth\Access\HandlesAuthorization;

class BillPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function destroy(User $user, Bill $bill)
    {
        return $user->id === $bill->user_id;
    }
}
