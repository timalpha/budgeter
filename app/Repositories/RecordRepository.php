<?php
namespace App\Repositories;

use App\User;
use App\Record;

class RecordRepository
{

    public function forUser(User $user)
    {
        return Record::where('user_id', $user->id)
                    ->orderBy('amount', 'desc')
                    ->get();
    }
    
}