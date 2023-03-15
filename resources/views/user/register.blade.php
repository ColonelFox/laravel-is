@include('partials.header')
<html>
    <head>
        <title>Register</title>
    </head>

<form action="/store" method="Post">
    @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Name:</label>
        <input
            type="text" 
            class="form-control" 
            name="name">
            @error('name')
            <p> Invalid name. Name should atleast 4 characters long. </p>
            @enderror
  </div>
  <div class="mb-3">
    <label for="emailAddress" class="form-label">Email address</label>
        <input 
            type="email" 
            class="form-control" 
            name="email" 
            aria-describedby="emailHelp">
    @error('email')
            <p> E-mail is already in use. </p>
    @enderror

    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>

  </div>

  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
      <input 
          type="password" 
          class="form-control" 
          name="password">
  </div>

  <div class="mb-3">
    <label for="confirmPassword" class="form-label">Confirm Password</label>
        <input 
            type="password" 
            class="form-control" 
            name="password_confirmation">
  </div>

  <button type="submit" class="btn btn-primary">Register</button>
  
</form>
<form action="/login" method="get">
  <p>Have an account already? </p><a class="nav-link" href="/login">Log-in</a>
</form>

</html>
@include('partials.footer')