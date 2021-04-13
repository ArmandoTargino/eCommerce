@extends("header")
@section("content")

<div class="container plans" id="pricing">

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Plans Pricing</h1>
      <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
    </div>

    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col pricing hvr-grow">
        <div class="card mb-4 shadow-sm  cardShadow">
        <div class="card-header">
          <h4 class="my-0 fw-normal">Starter</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">$99.99 <small class="text-muted">/ mo</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>10 users included</li>
            <li>2 GB of storage</li>
            <li>Email support</li>
            <li>Help center access</li>
          </ul>
          <button type="button" class="w-100 btn btn-lg btn-outline-dark" onclick="location.href='/checkout'">Buy Right now!</button>
        </div>
      </div>
      </div>
      <div class="col pricing hvr-grow">
        <div class="card mb-4 shadow-sm cardShadow">
        <div class="card-header">
          <h4 class="my-0 fw-normal">Traveler</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">$399.99 <small class="text-muted">/ mo</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>20 users included</li>
            <li>10 GB of storage</li>
            <li>Priority email support</li>
            <li>Help center access</li>
          </ul>
          <form class="" action="index.html" method="post">
            <button type="button" class="w-100 btn btn-lg btn-outline-dark"onclick="location.href='/checkout'">Buy Right now!</button>
          </form>

        </div>
      </div>
      </div>
      <div class="col pricing hvr-grow">
        <div class="card mb-4 shadow-sm cardShadow">
        <div class="card-header">
          <h4 class="my-0 fw-normal">Pro Traveler</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">$899.99 <small class="text-muted">/ mo</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>30 users included</li>
            <li>15 GB of storage</li>
            <li>Phone and email support</li>
            <li>Help center access</li>
          </ul>
          <form class="" action="index.html" method="post">
            <button type="button" class="w-100 btn btn-lg btn-outline-dark"onclick="location.href='/checkout'">Buy Right now!</button>
          </form>
        </div>
      </div>
      </div>
    </div>

</div>

@extends("footer")
@section("content")
