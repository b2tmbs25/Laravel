@extends('layout')

@section('content')
<div class="col-sm-6">
    <h1>Edit RESTAURANT IN INDIA</h1>

    <form method="post" action="{{ url('edit') }}">
        @csrf
        <input type="hidden" name="id" value="{{ $data->id }}">

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{ $data->name }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="{{ $data->email }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Address</label>
            <input type="text" class="form-control" name="address" value="{{ $data->address }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection

