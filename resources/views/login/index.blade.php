@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-md-4">

    @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <main class="form-signin">
      <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
      <form action="/login" method="post">
        @csrf
        <div class="form-floating">
          <input type="nimnip" name="nimnip" class="form-control @error('nimnip') is-invalid @enderror" id="nimnip" placeholder="name@example.com" autofocus required value="{{ old('nimnip') }}">
          <label for="nimnip">NIP</label>
          @error('nimnip')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
          <label for="password">Password</label>
        </div>
    
        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
      </form>
      
    </main>
  </div>
</div>

@endsection