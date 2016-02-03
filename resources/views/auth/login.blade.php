@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card card-block">
                    <h4 class="card-title">Login</h4>
                    <form class="form" action="{{ url('/login') }}" method="POST">
                        {!! csrf_field() !!}
                        <div class="form-group row {{ $errors->has('email') ? 'has-danger' : '' }}">
                            <label for="email" class="col-md-4 form-control-label">Email address</label>
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
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection
