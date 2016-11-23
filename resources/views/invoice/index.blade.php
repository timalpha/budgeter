@extends('layouts.app')

@section('content')
    @include('common.errors')
        <div class="card">
            <div class="card-header">Invoices</div>
            <div class="card-block">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Label</th>
                            <th>Due</th>
                            <th>Amount</th>
                            <th></th>
                        </tr>
                    @foreach ($items as $item)
                        <tr>
                            <th>{{ $item->label }}</th>
                            <th>{{ $item->start_date }}</th>
                            <th>  
                                {{ $item->amount }}
                            </th>
                            <th>
                                {{ Form::open(['url' => ['/invoice', $item->id], 'method' => 'delete']) }}
                                    <button type="submit" class="btn btn-secondary btn-sm"><i class="fa fa-btn fa-trash"></i></button>
        				        {!! Form::close() !!}
                            </th>
                        </tr>
                    @endforeach
                        <tr>
                            <th>Total</th>
                            <th></th>
                            <th><span class="label label-default label-pill">{{ $total }}</span></th>
                            <th></th>
                        </tr>
                    </thead>
                </table>
                <p><a href="/invoice/create" class="btn btn-success">Add invoice</a></p>
            </div>
        </div>
        
@stop