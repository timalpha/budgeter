@extends('layouts.app')

@section('content')
    @include('common.errors')
    <div class="card card-block">
    <h4 class="card-title">Dashboard</h4>
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
                        <form action="/records/{{ $item->id }}" method="POST">
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
        <p><a href="/records/create" class="btn btn-success">Add record</a></p>
    </div>
@stop