<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Invoice;

class InvoiceController extends Controller
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
        $items = $request->user()->invoices;
        if (!$items->isEmpty()) {
            $total = $items->sum('amount');
            return view('invoice.index', [
                'items' => $items,
                'total' => $total,
            ]);
        }
        return redirect()->action('InvoiceController@create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('invoice.create');
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
            //'recurring' => 'boolean',
        ]);
        // $recurring = false;
        // if($request->recurring)
        // {
        //     $recurring = true;
        // }
        $request->user()->invoices()->create([
            'label' => $request->label,
            'amount' => $request->amount,
            'start_date' => $request->start_date,
            //'recurring' => $recurring,  
        ]);
        
        return redirect('/invoices');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Invoice $invoice)
    {
        // $this->authorize('destroy', $invoice);
        $invoice->delete();
        return redirect('/invoices');
    }
}
