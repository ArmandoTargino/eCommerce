@extends("header")
@section("content")
<div class="container outer">
  <div class="loginForm">
    <h2><i class="fas fa-globe-europe"></i> Register</h2>
    <!-- Makes POST request to /register route -->
    <form action="/register" method="POST">
      @csrf
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password">
      </div>
      <div class="submitButton">
        <button type="submit" class="btn btn-dark hvr-grow">Register</button>
    </form>
  </div>

  <div class="oauthLogin">
    <a class="btn btn-dark btn-social btn-google hvr-grow" href="/auth/google" role="button">
      <i class="fab fa-google"></i>
      Register with Google
    </a>
    <a class="btn btn-dark btn-social btn-facebook hvr-grow" href="/auth/facebook" role="button">
      <i class="social-icon fab fa-facebook-f"></i>
      Register with Facebook
    </a>
  </div>
</div>
</div>
@extends("footer")
@section("content")
