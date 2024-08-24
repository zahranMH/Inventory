<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

     <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <!-- Custom styles for this template -->
    <link href="/assets/css/signin.css" rel="stylesheet">
    
  </head>
  <body class="text-center">
    
    <main class="form-signin">
      <form action="/actionlogin" method="POST">
        @csrf
        <h1 class="h3 mb-3 fw-normal">Please Login</h1>
        
        <div class="form-floating">
          <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
          <label for="email">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          <label for="password">Password</label>
        </div>
        
        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
      </form>
    </main>
    
    @if(session('failed'))
        <script>
            Swal.fire({
            title: "Gagal",
            text: "{{ session('failed') }}",
            icon: "error"
        });
        </script>
    @endif
    
  </body>
  </html>
  