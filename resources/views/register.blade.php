<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="{{ url('/css/register.css') }}" />
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<body>
  <div class="container">
  <div class="card bg-light mt-5">
  <article class="card-body mx-auto" style="max-width: 400px;">
     <h4 class="card-title mt-3 text-center">Create Account</h4>
      <form>
      <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
        </div>
            <input name="" class="form-control" placeholder="Full name" type="text">
        </div> <!-- form-group// -->
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
        </div>
            <input name="" class="form-control" placeholder="Email address" type="email">
        </div> <!-- form-group// -->
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
        </div>
          <input name="" class="form-control" placeholder="Phone number" type="text">
        </div> <!-- form-group// -->
        <!-- form-group end.// -->
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        </div>
            <input class="form-control" placeholder="Create password" type="password">
        </div> <!-- form-group// -->
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        </div>
            <input class="form-control" placeholder="Repeat password" type="password">
        </div> <!-- form-group// -->                                      
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
        </div> <!-- form-group// -->      
        <p class="text-center">Have an account? <a href="#">Log In</a> </p>
    </form>
  </article>
  </div> <!-- card.// -->
</div> 
<!--container end.//-->


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>