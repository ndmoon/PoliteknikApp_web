@extends('layouts.main')
@section('title','Register')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <main class="form-signin w-100 m-auto">

              <form method="post" action="/register">
                @csrf
                  <h1 class="h3 my-5 fw-normal text-center">Please sign up</h1>
              
                  <div class="form-floating">
                    <input type="name" class="form-control @error('name') is-invalid
                    @enderror" value="{{ old('name') }}" name="name" id="floatingname" placeholder="name" required autofocus>
                    @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                    <label for="floatingname">Name</label>
                  </div>

                  <div class="form-floating">
                    <input type="email" class="form-control @error('email') is-invalid
                    @enderror" value="{{ old('email') }}" name="email" id="floatingEmail" placeholder="Email" required>
                    @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                    <label for="floatingEmail">Email address</label>
                  </div>

                  <div class="form-floating">
                    <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
                  </div>
                  
                  <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Sign Up</button>
                  <p class="mt-5 mb-3 text-muted text-center">&copy; 2023</p>
                </form>
            </main>  
        </div>
    </div>
  

@endsection