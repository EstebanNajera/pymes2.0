@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Editar</h2>          
    
<div id="RegisterModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
 aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;  </button>
            <h4 class="modal-title" id="myModalLabel">Register</h4>
        </div>

        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
            {!! csrf_field() !!}

            <div class="modal-body">

                <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">First name</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" name="first_name"
                               value="{{ old('first_name') }}">
                    </div>
                </div>

                <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Last name</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" name="last_name"
                               value="{{ old('last_name') }}">
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">E-Mail Address</label>

                    <div class="col-md-6">
                        <input type="email" class="form-control" name="email"
                               value="{{ old('email') }}">
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Password</label>

                    <div class="col-md-6">
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Confirm Password</label>

                    <div class="col-md-6">
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>
                </div>

            </div>

            <div class="modal-footer">
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-2">
                        <button name="RegisterButton" type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-user"></i> Register
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

    
</div> 
@endsection