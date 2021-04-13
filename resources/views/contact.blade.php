@extends("header")
@section("content")
<div class="container outerContact">
  <div class="container contactForm">
    <h2>Contact Us</h2>
    <br>
    <form class="" action="index.html" method="post">
      <div class="mb-5">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="mb-5">
        <label for="exampleFormControlTextarea1" class="form-label">What would you like to relate to us?</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Type here..."></textarea>
      </div>
      <div class="col-2 contactFormButton">
        <button class="btn btn-dark" type="submit">Submit form</button>
      </div>
    </form>

  </div>
</div>
@extends("footer")
@section("content")
