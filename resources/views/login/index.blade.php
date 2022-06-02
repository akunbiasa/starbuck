@extends('components.layout')

@section('container')

<div class="row justify-content-center">
  
  <div class="col-md-6">

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{  session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session()->has('LoginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{  session('LoginError') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <main class="form-signin w-100 m-auto ">
      <form action="/login" method="post">
        @csrf
        <img src="img/logostarbuck.png" class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
    
        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email') is-invalid 
          @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old 
          ('email') }}">
          <label for="email">Email address</label>
          @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
          <label for="floatingPassword">Password</label>
        </div>
    
       
        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        
      </form>

      
      <a class="d-block text-center mt-3" href="/register">Not Registered? Register Now</a>
    
    </main>
  </div>
</div>
@endsection