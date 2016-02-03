<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Record;
use App\Http\Requests\CreateRecord;
use App\Policies\RecordPolicy;
//use App\Repositories\RecordRepository;

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
    public function index()
    {

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
    public function store(CreateRecord $request)
    {
        Record::create($request->all());
        
        return redirect('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(RecordPolicy $id, Request $request)
    {
        $this->authorize('delete', $id);
        $id->delete();
        return redirect('records');
    }
}
