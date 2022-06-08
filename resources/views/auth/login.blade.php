@extends('welcome')

@section('content')
<div class="container mt-5 d-flex justify-content-center">
    <h1 class="fs-2 fw-bold">LOGIN</h1>
</div>

<div class="container d-flex justify-content-center">

    <div class="card p-lg-4 w-50 bg-secondary">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label class="text-white" for="email">Email</label>
                <input name="email" type="text" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="email" value="{{ old('email') }}">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
              </div>
            <div class="mb-3">
              <label class="text-white" for="password">Password</label>
              <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password">
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      {{ $message }}
                  </span>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
          </form>
          <a class="text-white" href="{{ route('password.request') }}">Forgot Password?Click Here to reset</a>
    </div>

</div>

@endsection