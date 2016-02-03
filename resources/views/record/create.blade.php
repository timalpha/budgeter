@extends('layouts.app')
@section('header')
<link rel="stylesheet" href="/css/pikaday.css" type="text/css">
@stop
@section('content')
    @include('common.errors')
<div class="card card-block">
<!-- <form class="form" action="/records" method="POST"> -->
    {!! Form::open(['action' => 'RecordController@store']) !!}
    <fieldset class="form-group">
        {!! Form::text('label', null, ['class' => 'form-control', 'placeholder' => 'Label']) !!}
    </fieldset>
    <fieldset class="form-group">
        <div class="input-group">
            <span class="input-group-addon">$</span>
            {!! Form::text('amount', null, ['class' => 'form-control', 'placeholder' => 'Amount']) !!}
        </div>
    </fieldset>
    <div class="form-group">
        {!! Form::text('start_date', null, ['class' => 'form-control', 'id' => 'datepicker', 'placeholder' => 'Date']) !!}
    </div>
    <div class="checkbox">
        <label>
            {!! Form::checkbox('recurring', true) !!} Recurring
        </label>
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
{!! Form::close() !!}
</div>
@stop
@section('footer')
<script src="/js/moment.js"></script>
<script src="/js/pikaday.js"></script>
    <script>
        var picker = new Pikaday({
            field: document.getElementById('datepicker'),
            format: 'YYYY-MM-DD'
        });
    </script>
@stop