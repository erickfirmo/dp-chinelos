@extends('admin.layouts.login')
@section('title', 'Login')
@section('description', 'Login')
@section('content')


    <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
                
                <span id="reauth-email" class="reauth-email"></span>
                
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" id="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Senha" required>
                    @if ($errors->has('password'))
                    <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>


                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Lembrar-me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Entrar</button>
            </form><!-- /form -->
            <a href="{{ route('password.request') }}" class="forgot-password">
                Esqueceu sua senha?
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->



@endsection
