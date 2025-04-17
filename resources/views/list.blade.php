@extends('layout')

@section('content')

<div>
    <h1>LIST OF  RESTAURANT IN INDIA</h1>
    @if (Session::get('status'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
  {{Session('status')}} 
</div>
    @endif
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Created</th>
      <th scope="col">Updated</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $item)
    <tr>
        
      <th scope="row">{{ $item->id }}</th>
      <td>{{ $item->name }}</td>
      <td>{{ $item->email }}</td>
      <td>{{ $item->address }}</td>
      <td>{{ $item->created_at }}</td>
      <td>{{ $item->updated_at }}</td>
      <td><a href="delete/{{ $item->id }}"><i class = "fa fa-trash"></i></a></td>
      <td><a href="edit/{{ $item->id }}"><i class = "fa fa-edit"></i></a></td>
      
    </tr>
    @endforeach
   
  </tbody>
</table>
</div>

@endsection