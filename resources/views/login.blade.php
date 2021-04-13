@extends("header")
@section("content")

<div class="container outer">
  <div class="loginForm">
    <h2><i class="fas fa-globe-europe"></i> Login</h2>
    <!-- Makes POST request to /register route -->
    <form action="/login" method="POST">
      <div class="form-group">
        @csrf
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password">
      </div>
      <div class="submitButton">
        <button type="submit" class="btn btn-dark hvr-grow">Login</button>
    </form>
  </div>

  <div class="oauthLogin">
    <a class="btn btn-dark btn-social btn-google hvr-grow" href="/auth/google" role="button">
      <i class="fab fa-google"></i>
      Login with Google
    </a>
    <a class="btn btn-dark btn-social btn-facebook hvr-grow" href="/auth/facebook" role="button">
      <i class="social-icon fab fa-facebook-f"></i>
      Login with Facebook
    </a>
  </div>
</div>
</div>
@extends("footer")
@section("content")
