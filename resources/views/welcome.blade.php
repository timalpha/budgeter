@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-3">{{ config('app.name') }}</h1>
        <p class="lead">{{ config('app.name') }} is a budgeting tool made to be simple and elegant.</p>
        <hr class="m-y-2">
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="/register" role="button"><i class="fa fa-btn fa-user"></i> Try it now</a>
        </p>
    </div>
</div>
@stop