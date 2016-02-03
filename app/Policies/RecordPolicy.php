<?php

namespace App\Policies;

use App\User;
use App\Record;

use Illuminate\Auth\Access\HandlesAuthorization;

class RecordPolicy
{
    use HandlesAuthorization;


    /**
     * Determine if the given record can be deleted by the user.
     * 
     * @param  User $user
     * @param  Record $record
     * @return bool
     */
    public function destroy(User $user, Record $record)
    {
        return $user->id === $record->user_id;
    }
}
