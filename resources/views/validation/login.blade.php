@extends('layouts.app')
@section('title', '- Laporan')
@section('content')
<div class="container">

    <h2 class="mt-4 p-3"><center>Login</center></h2>
    <div class="card p-5">
        <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">username</label>
              <input type="username" class="form-control" id="username" name="username" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>
@endsection