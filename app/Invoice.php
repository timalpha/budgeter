<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'label', 'amount', 'recurring', 'start_date',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
