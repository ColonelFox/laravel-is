@include('partials.header')
<html>
    <head>
        <title>Log-in</title>
    </head>

<form action="login/process" method="Post">
@csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button> 

</form>
<form action="/login" method="get">
  <p>Don't have an account yet? </p><a class="nav-link" href="/register">Register</a>
</form>
</html>
@include('partials.footer')