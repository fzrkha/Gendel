<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">

    

    

<link href="{{ asset('css') }}/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <link href="{{ asset('css') }}/sign-in.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-registration w-100 m-auto">
  <form action="/register" method="post">
    @csrf
    <img class="mb-4" src="{{ asset('img') }}/qingxin.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Registrasi dulu masbro</h1>

    <div class="form-floating">
      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Masukkan Nama" required value="{{ old('name') }}">
      <label for="name">Nama</label>
      @error('name')
      <div class="invalid-feedback" align="left">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="form-floating">
        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" required value="{{ old('username') }}">
        <label for="username">Username</label>
        @error('username')
      <div class="invalid-feedback" align="left">
        {{ $message }}
      </div>
      @enderror
      </div>
  
    <div class="form-floating">
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
        <label for="email">Alamat Email</label>
        @error('email')
      <div class="invalid-feedback" align="left">
        {{ $message }}
      </div>
      @enderror
      </div>
  
    <div class="form-floating">
      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
      <label for="password">Password</label>
      @error('password')
      <div class="invalid-feedback" align="left">
        {{ $message }}
      </div>
      @enderror
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Daftar</button>
    <small>Sudah punya akun? <a href="/login">login</a></small>
    <p class="mt-5 mb-3 text-muted">&copy; Korakora</p>
  </form>
</main>
  </body>
</html>
