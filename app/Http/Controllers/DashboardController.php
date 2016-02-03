<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Record;
use App\Repositories\RecordRepository;

class DashboardController extends Controller
{
    public function index()
    {
        $items = Record::all();
        $total = Record::all()->sum('amount');
        return view('dashboard', ['items' => $items, 'total' => $total]);
    }
    
}
