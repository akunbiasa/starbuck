@extends('components.layout')

@section('container')

<div class="row justify-content-center">
  
  <div class="col-lg-4">
    <main class="form-registration w-100 m-auto">
      <form action="/register" method="post">
        @csrf
        <img src="img/logostarbuck.png" class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Registration Form</h1>
    
        <div class="form-floating">
          <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="Name">
          <label for="name">Name</label>
        </div>
        <div class="form-floating">
          <input type="text" name="username" class="form-control" id="username" placeholder="Username">
          <label for="username">username</label>
        </div>
        <div class="form-floating">
          <input type="email" name="email" class="form-control" id="email" placeholder="Email">
          <label for="email">Email</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control rounded-bottom" name="password" id="password" placeholder="Password">
          <label for="password">Password</label>
        </div>
    
       
        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Registration</button>
        
      </form>

      
      <a class="d-block text-center mt-3" href="/login">Already Registered? Login Here</a>
    
    </main>
  </div>
</div>
@endsection