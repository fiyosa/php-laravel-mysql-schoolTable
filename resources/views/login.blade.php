@extends('partials.main')

@section('main')
  @if ($errors->any())
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>   
  @endif

  @if (session()->has('failed'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('failed') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>          
  @endif

  <div class="login-wrapper">
    <form action="/login" method="post" class="login-form">
      @csrf
      <h1 class="h3 mb-3 fw-normal login-text">Please sign in</h1>
    
      <div class="form-floating">
        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" value="{{ old('email') }}" autofocus required>
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
        <label for="floatingPassword">Password</label>
      </div>

      <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
    </form>
  </div>
  <div style="height: 30vh"></div>

@endsection