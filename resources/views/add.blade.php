@extends('layout')

@section('content')

<div class="col-sm-6">
    <h1>
        ADD RESTAURANT IN INDIA
    </h1>
<form method="post" action="add">
    @csrf
  <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" class="form-control" name="name" >
    </div>
    <div class="mb-3">
    <label  class="form-label">Email </label>
    <input type="email" class="form-control" name="email">
    </div>
    <div class="mb-3">
    <label  class="form-label">Address</label>
    <input type="text" class="form-control" name="address" >
    </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>

@endsection
