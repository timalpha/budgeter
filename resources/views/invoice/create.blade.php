@extends('layouts.app')
@section('header')
@stop
@section('content')
    @include('common.errors')
<div class="card card-block">
    {!! Form::open(['action' => 'InvoiceController@store']) !!}
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
    <!--
    <div class="checkbox">
        <label>
            {!! Form::checkbox('recurring', true, false) !!} Recurring
        </label>
    </div>
    -->
    <button type="submit" class="btn btn-primary">Add</button>
{!! Form::close() !!}
</div>
@stop
@section('footer')
@stop