@extends ('layouts.master')

@section('header')
	<div class="container-fluid bg-dark" align="center">
		<img src="http://www.sackoba.com/images/main_image.jpg" alt="Header Image" class="img-fluid">
	</div>
@endsection

@section('content')
	<div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">User ID</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="User ID" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->
@endsection