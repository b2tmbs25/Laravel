@extends('layout')

@section ('content')

<div class="col-sm-8">
    <h1>User Register page</h1>
    <form method="post" action="register">
    @csrf
  <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter Your Name" >
    </div>
    <div class="mb-3">
    <label  class="form-label">Email</label>
    <input type="email" class="form-control" name="email" placeholder="Enter Your email" >
    </div>
    <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="password" class="form-control" name="Password" placeholder="Enter Your Password" >
    </div>
    <div class="mb-3">
    <label  class="form-label">Phone</label>
    <input type="text" class="form-control" name="phone" placeholder="Enter Your Number" >
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
@stop


