@include('partials.header')
<html>
    <head>
        <title>Add New Customer</title>
    </head>

<form action="/saveCustomer" method="Post">
    @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Last Name:</label>
        <input
            type="text" 
            class="form-control" 
            name="lastName">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">First Name:</label>
        <input
            type="text" 
            class="form-control" 
            name="firstName">
  </div>
  <div class="mb-3">
    <label for="emailAddress" class="form-label">Email address:</label>
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
    <label for="address" class="form-label">Address:</label>
      <input 
          type="address" 
          class="form-control" 
          name="address">
  </div>

  <div class="mb-3">
    <label for="ContactNo" class="form-label">Contact Number:</label>
        <input 
            type="ContactNo" 
            class="form-control" 
            name="contactNumber">
  </div>

  <button type="submit" class="btn btn-primary">Add</button>
  
</form>
</html>
@include('partials.footer')