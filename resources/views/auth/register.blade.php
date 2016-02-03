@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card card-block">
                    <h4 class="card-title">Register</h4>
                    <form class="form" action="/register" method="POST">
                        {!! csrf_field() !!}
                        <div class="form-group row {{ $errors->has('name') ? 'has-danger' : '' }}">
                            <label for="name" class="col-md-4 form-control-label">Full name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="name" value="{{ old('name') }}" name="name">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row {{ $errors->has('email') ? 'has-danger' : '' }}">
                            <label for="email" class="col-md-4 form-control-label">E-mail Address</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" id="email" placeholder="email@example.com" value="{{ old('email') }}" name="email">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row {{ $errors->has('password') ? 'has-danger' : '' }}">
                            <label for="password" class="col-md-4 form-control-label">Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" id="password" name="password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row {{ $errors->has('password_confirmation') ? 'has-danger' : '' }}">
                            <label for="password_confirmation" class="col-md-4 form-control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection