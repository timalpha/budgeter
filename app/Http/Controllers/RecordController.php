<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Record;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RecordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $items = $request->user()->records;
        $total = $items->sum('amount');
        return view('dashboard', [
            'items' => $items,
            'total' => $total,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('record.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'label' => 'required|max:64',
            'amount' => 'required|numeric',
            'start_date' => 'required|date',
            'recurring' => 'boolean',
        ]);
        if($request->recurring)
        {
            $recurring = true;
        }
        else
        {
            $recurring = false;
        }
        $request->user()->records()->create([
            'label' => $request->label,
            'amount' => $request->amount,
            'start_date' => $request->start_date,
            'recurring' => $recurring,  
        ]);
        
        return redirect('/records');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Record $record)
    {
        $this->authorize('destroy', $record);
        $record->delete();
        return redirect('/records');
    }
}
