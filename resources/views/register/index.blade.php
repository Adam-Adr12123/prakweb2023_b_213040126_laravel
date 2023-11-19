@extends('layout.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Registrasion Form</h1>
          <form>
        
            <div class="form-floating">
              <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="Name">
              <label for="name">Name</label>
            </div>
            <div class="form-floating">
              <input type="text" name="username" class="form-control" id="username" placeholder="UserName">
              <label for="username">Username</label>
            </div>
            <div class="form-floating">
              <input type="email" name="email" class="form-control" id="email" placeholder="email">
              <label for="email">email</label>
            </div>
            <div class="form-floating">
              <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password">
              <label for="password">Password</label>
            </div>
        
            
            <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Registered</button>

          </form>

          <small class="d-block text-center mt-3">Already registered? <a href="/login">Login</a></small>
        </main>
        
    </div>
</div>


@endsection