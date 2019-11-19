@extends('admin.auth.master')

@section('content')
    <div class="body">

        <form id="sign_in" role="form" method="POST" >
            @if (count($errors) > 0)
                <div class="alert alert-info">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{ csrf_field() }}
            <div class="msg">تسجيل الدخول</div>
            <div class="input-group">
            <span class="input-group-addon">
              <i class="material-icons">email</i>
            </span>
                <div class="form-line no-bac">
                    <input type="email" class="form-control"  name="email" value="{{ old('email') }}"  placeholder="Email" required autofocus>
                </div>
            </div>
            <div class="input-group">
            <span class="input-group-addon">
              <i class="material-icons">lock</i>
            </span>
                <div class="form-line no-bac">
                    <input  type="password" class="form-control" name="password" placeholder="Password" required>
                </div>

            </div>
            <div class="row">

                <div class="col-xs-4 button-log-in">
                    <button class="btn btn-block bg-blue waves-effect" type="submit">دخول</button>
                </div>
            </div>

        </form>
    </div>

    @endsection