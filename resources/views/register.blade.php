<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CalmUI Admin</title>
        <link rel="stylesheet" href="{{ asset('vendors/mdi/css/materialdesignicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
        
        <link rel="stylesheet" href="{{ asset('css/vertical-layout-light/style.css') }}">
       
        <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
               
    </head>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                <img src="{{ asset('images/logo.svg') }}" alt="logo">
              </div>
              <h4>New here?</h4>
              <h6 class="font-weight-light">Join us today! It takes only few steps</h6>
              <form action="{{ route('register') }}" method="post" enctype="multipart/form-data" class="pt-3">
@csrf
                <div class="form-group">
                  <label>First Name</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0" placeholder="First Name" name="First_Name">
                  </div>
                 	@error('First_Name')
					    <div class="alert alert-danger">{{ $message }}</div>
					@enderror
                </div>


                <div class="form-group">
                  <label>Last Name</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0" placeholder="Last Name" name="Last_Name">
                  </div>
                 	@error('Last_Name')
					    <div class="alert alert-danger">{{ $message }}</div>
					@enderror
                </div>

   
                <div class="form-group">
                  <label>Username</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0" placeholder="Username" name="Username">
                  </div>
                 	@error('Username')
					    <div class="alert alert-danger">{{ $message }}</div>
					@enderror
                </div>

                
                <div class="form-group">
                  <label>Email</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-email-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="email" class="form-control form-control-lg border-left-0" placeholder="Email" name="Email">
                  </div>
                 	@error('Email')
					    <div class="alert alert-danger">{{ $message }}</div>
					@enderror 
                </div>


                <div class="form-group">
                  <label>Mobile Number</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-phone-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0" placeholder="Mobile Number" name="Mobile_Number">
                  </div>
                 	@error('Mobile_Number')
					    <div class="alert alert-danger">{{ $message }}</div>
					@enderror  
                </div>

                
                <div class="form-group">
                  <label>Gender</label>
                  <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="Gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                 	@error('Gender')
					    <div class="alert alert-danger">{{ $message }}</div>
					@enderror
                </div>

            	<div class="form-group">
                    <label>Date of Birth</label>
                    <div class="input-group">
                        <input class="form-control" placeholder="dd/mm/yyyy" name="Date">
                    </div>
                 	@error('Date')
					    <div class="alert alert-danger">{{ $message }}</div>
					@enderror
                </div>

               	<div class="form-group">
                    <label>Profile Picture</label>
                    <input type="file" name="Image" class="file-upload-default">
                    <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled=""placeholder="Upload Image">
                    <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                    </span>
                    </div>
                 	@error('Image')
					    <div class="alert alert-danger">{{ $message }}</div>
					@enderror
                 </div>


                <div class="form-group">
                  <label>Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Password" name="password">                        
                  </div>
                 	@error('password')
					    <div class="alert alert-danger">{{ $message }}</div>
					@enderror
                </div>


                <div class="form-group">
                  <label>Re-Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Password" name="password_confirmation">                        
                  </div>
                 	@error('password_confirmation')
					    <div class="alert alert-danger">{{ $message }}</div>
					@enderror
                </div>

                
                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>
                <div class="mt-3">
                 <input class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"  type="submit" value="SIGN UP">
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="login.html" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6 register-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2018  All rights reserved.</p>
          </div>
        </div>
      </div>
   
    </div>

  </div>
<script src="{{ asset('vendors/js/vendor.bundle.base.js')  }}"></script>
    <script src="{{ asset('js/template.js')  }}"></script>
     <script src="{{ asset('js/file-upload.js')  }}"></script>
</body>
</html>
