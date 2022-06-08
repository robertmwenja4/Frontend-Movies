@extends('welcome')

@section('content')
<div class="container mt-2 d-flex justify-content-center">
    <h1 class="fs-2 fw-bold">REGISTER</h1>
</div>


<div class="container d-flex justify-content-center">
    <div class="card p-lg-3 w-50 bg-secondary">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3">
              <label class="text-white" for="name">Name</label>
              <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="name" value="{{ old('name') }}">
              @error('name')
                  <span class="invalid-feedback" role="alert">
                      {{ $message }}
                  </span>
              @enderror
            </div>
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
            <div class="mb-3">
                <label class="text-white" for="password_confirmation">Password Confirmation</label>
                <input name="password_confirmation" type="password" class="form-control" id="password_confirmation">
              </div>
            <button id="submit" type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>
@endsection