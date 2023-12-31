@extends('students.layout')
@section('content')
<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>
<div class="card push-top">
  <div class="card-header">
    Add User
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('students.store') }}">
          <div class="mb-3">
              @csrf
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" name="email"/>
          </div>
          <div class="mb-3">
              <label for="phone" class="form-label">Phone</label>
              <input type="tel" class="form-control" name="phone"/>
          </div>
          <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="text" class="form-control" name="password"/>
          </div>
          <button type="submit" class="btn btn-primary">Create User</button>
      </form>
  </div>
</div>
@endsection