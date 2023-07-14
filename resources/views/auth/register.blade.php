@extends('layouts.login')

@section('content')
<div class="container">
      
      <div class="row mt-lg-n1 mt-md-n12 mt-n1">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-1">

            <div class="card-header text-center pt-4">
              <h5>Sign Up</h5>
            </div>
           
            <div class="card-body">
            
            <form method="POST" action="{{ route('register') }}" autocomplete="off">
                @csrf

                <div class="mb-3">
                    <label>First name</label>
                    <input type="text" class="form-control" placeholder="First Name" aria-label="Name" name="first_name" value="{{old('first_name')}}">

                    @error('first_name')
                        <span class="text-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <label>Last Name</label>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Last Name" aria-label="Last Name" name="last_name" value="{{old('last_name')}}">

                    @error('last_name')
                        <span class="text-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <label>Email Address</label>
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Email Address" aria-label="Email Address" name="email" value="{{old('email')}}">

                    @error('email')
                        <span class="text-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <label>Address1</label>
                <div class="mb-3">
                  <input type="address" class="form-control" placeholder="Address1" aria-label="Address1" name="address_1" value="{{old('address_1')}}">
                </div>

                <label>Address2</label>
                <div class="mb-3">
                  <input type="address" class="form-control" placeholder="Address2" aria-label="Address2" name="address_2" value="{{old('address_2')}}">
                </div>

                <label>Postal Code</label>
                <div class="mb-3">
                  <input type="postalcode" class="form-control" placeholder="Postal Code" aria-label="Postal Code" name="post_code" value="{{old('post_code')}}">
                </div>

                <label>State</label>
                <div class="mb-3">
                  <input type="state" class="form-control" placeholder="State" aria-label="State" name="state" value="{{old('state')}}">
                </div>

                <label>Country</label>
                <div class="mb-3">
                  <input type="country" class="form-control" placeholder="Country" aria-label="Country" name="country" value="{{old('country')}}">
                </div>

                <label>Password</label>
                <div class="mb-3">
                    <input type="password" class="form-control" placeholder="Password" aria-label="Password" name="password">
                    @error('password')
                        <span class="text-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <label>Confirm Password</label>
                <div class="mb-3">
                  <input type="password" class="form-control" placeholder="Confirm Password" aria-label="Confirm Password" name="password_confirmation">
                </div>
                
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-info w-100 my-4 mb-2">Sign Up</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
