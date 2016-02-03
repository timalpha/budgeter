@extends('layouts.app')

@section('content')
    @include('common.errors')
    <div class="card card-block">
    <h4 class="card-title">Bills</h4>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Label</th>
                    <th>Due</th>
                    <th>Amount</th>
                    <th></th>
                </tr>
            @foreach ($bills as $bill)
                <tr>
                    <th>{{ $bill->label }}</th>
                    <th>{{ $bill->start_date }}</th>
                    <th>  
                        {{ $bill->amount }}
                    </th>
                    <th>
                        <form action="/bill/{{ $bill->id }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-secondary btn-sm"><i class="fa fa-btn fa-trash"></i></button>
				        </form>
                    </th>
                </tr>
            @endforeach
            <tr>
                <th>Total</th>
                <th></th>
                <th><span class="label label-default label-pill">{{ $total }}</span></th>
                <th></th>
            </tr>
        </table>
    </div>
    <div class="card card-block">
    <form class="form" action="/bill/create" method="POST">
        {!! csrf_field() !!}
        <fieldset class="form-group">
            <input type="text" name="label" class="form-control" id="bill-label" placeholder="Label">
        </fieldset>
        <fieldset class="form-group">
            <div class="input-group">
                <span class="input-group-addon">$</span>
                <input type="text" name="amount" class="form-control" id="bill-amount" placeholder="Amount">
            </div>
        </fieldset>
        <div class="form-group">
            <input type="text" name="date" class="form-control" id="datepicker" placeholder="Date">
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="recurring" id="bill-recurring"> Recurring
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
    </div>
@stop
@section('footer')
    <script>
        var picker = new Pikaday({
            field: document.getElementById('datepicker'),
            format: 'YYYY-MM-DD'
        });
    </script>
@stop