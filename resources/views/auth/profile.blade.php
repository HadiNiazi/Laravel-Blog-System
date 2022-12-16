@extends('layouts.auth') 

@section('title', 'Profile | Admin Dashboard') 

@section('styles')
@endsection

@section('content')
<div class="content-wrapper">
	<div class="content">
		<!-- Masked Input -->
		<div class="card card-default">
			<div class="card-header">
				<h2>Update Profile</h2>
			</div>
			<div class="card-body"> 

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (Session::has('alert-success'))
                <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Success!</strong> {{ Session::get('alert-success') }}
                </div>
            @endif

          <form method="post" action="">
            @csrf
            
              <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" value="{{ old('name', $user ? $user->name: '') }}" class="form-control" placeholder="Name">
              </div>

              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="{{ old('email', $user ? $user->email: '') }}" class="form-control" placeholder="Email">
              </div>

              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
              </div>

              <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
              </div>

              <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
          </div>
		</div>
	</div>
</div> 
@endsection

