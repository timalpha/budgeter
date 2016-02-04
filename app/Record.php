<?php

namespace App;

use App\User;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $fillable = [
        'label', 'amount', 'recurring', 'start_date',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
