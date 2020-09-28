@extends('layouts.app')

@section('content')

<div class="site-section bg-light">
  <div class="container">
    <div class="row align-items-stretch retro-layout-2">
      <div class="col-md-5">
        
        <div class="panel panel-default"><br><br>
                <div class="panel-heading"><h2>Login</h2><hr></div>

            <div class="panel-body">
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Password</label>

                        <div class="col-md-12">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>

                            <!-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
      </div>
      
      <div class="col-md-7"><br><br><br>
        <h2 class="display-4" style="padding-left:9%">"</h2>
        <h5 class="display-4" style="color: grey;font-size: 41px;padding-top: 0%;padding-left: 15%"><strong></strong> The true alchemists do not change lead into gold; they change the world into words. <strong></strong></h5>
      </div>
      
    </div>
    <br><br>
  </div>
</div>

<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
        </div>
    </div>
</div> -->
@endsection
