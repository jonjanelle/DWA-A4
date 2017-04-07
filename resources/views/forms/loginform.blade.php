<div class="form-box shadow-transition" id="login-form">
  <div class="form-head">
    <span class="glyphicon glyphicon-user"></span> Login
  </div>
  <div class=form-body>
    <form method="POST" role="form" method="POST" action="{{ route('login') }}">
      {{ csrf_field() }}
      <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email-input">Email address</label>
        <input type="email" class="form-control" id="email-input" name="email" value="{{ old('email') }}" required autofocus>
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
      </div>
      <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password-input">Password</label>
        <input type="password" class="form-control" id="password-input" name="password" placeholder="Password" required>
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <p>New user?
      <a href="/newuser"> Create an account</a>
    </p>
    <p>Forgot password?
    <a class="btn btn-link" href="{{ route('password.request') }}">
      Reset password
    </a>
    </p>
  </div>
</div>
