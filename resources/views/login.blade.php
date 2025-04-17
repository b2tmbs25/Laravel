@extends('layout')

@section ('content')

<div class="col-sm-6">
    <h1>Login User page</h1>
    <form method="post" action="login">
    @csrf
  <div class="mb-3">
   
    <div class="mb-3">
    <label  class="form-label">Email</label>
    <input type="email" class="form-control" name="email" placeholder="Enter Your email" >
    </div>
    <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="password" class="form-control" name="Password" placeholder="Enter Your Password" >
    </div>
   
    <button type="submit" class="btn btn-primary">Register</button>
</div>
@stop

