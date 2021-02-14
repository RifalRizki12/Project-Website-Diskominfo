<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/skote-mvc/layouts/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jan 2021 08:43:28 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>Register | Skote - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('tAdmin')}}/assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{asset('tAdmin')}}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('tAdmin')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('tAdmin')}}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>
        
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-soft-primary">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">Free Register</h5>
                                            <p>Get your free Skote account now.</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="{{asset('tAdmin')}}/assets/images/profile-img.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> 
                                <div>
                                    <a href="{{route('/')}}">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="{{asset('tAdmin')}}/assets/images/home.png" alt="" class="rounded-circle" height="30">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                                    <form class="form-horizontal" action="{{route('postregister')}}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group">
                                            <label for="namadepan">Nama Depan</label>
                                            <input name="nama_depan" type="nama_depan" class="form-control" id="namadepan" placeholder="Nama Depan">        
                                        </div>

                                        <div class="form-group">
                                            <label for="namabelakang">Nama Belakang</label>
                                            <input name="nama_belakang" type="nama_belakang" class="form-control" id="namabelakang" placeholder="Nama belakang">        
                                        </div>

                                        <div class="form-group" >
                                            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                            <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                              <option value="Laki-Laki"{{(old('jenis_kelamin') == 'Laki-Laki') ? ' selected' : ''}}>Laki-Laki</option>
                                              <option value="Perempuan"{{(old('jenis_kelamin') == 'Perempuan') ? ' selected' : ''}}>Perempuan</option>
                                            </select>
                                      </div>

                                        <div class="form-group">
                                            <label for="useremail">Email</label>
                                            <input name="email" type="email" class="form-control" id="useremail" placeholder="Enter email">     
                                            @if($errors->has('email'))
                                                <span class="help-block">{{$errors->first('email')}}</span>
                                            @endif
                                        </div>
                
                                        <div class="form-group">
                                            <label for="userpassword">Password</label>
                                            <input name="password" type="password" class="form-control" id="userpassword" placeholder="Enter password">        
                                        </div>
                    
                                        <div class="mt-4">
                                            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Register</button>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <h5 class="font-size-14 mb-3">Sign up using</h5>
            
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="javascript::void()" class="social-list-item bg-primary text-white border-primary">
                                                        <i class="mdi mdi-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript::void()" class="social-list-item bg-info text-white border-info">
                                                        <i class="mdi mdi-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript::void()" class="social-list-item bg-danger text-white border-danger">
                                                        <i class="mdi mdi-google"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                
                                        <div class="mt-4 text-center">
                                            <p class="mb-0">By registering you agree to the Skote <a href="#" class="text-primary">Terms of Use</a></p>
                                        </div>
                                    </form>
                                </div>
            
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            
                            <div>
                                <p>Already have an account ? <a href="{{route('login')}}" class="font-weight-medium text-primary"> Login</a> </p>
                                <p>© 2020 Skote. Crafted with <i class="mdi mdi-heart text-danger"></i> by Mohammad Rizki A</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- JAVASCRIPT -->
        <script src="{{asset('tAdmin')}}/assets/libs/jquery/jquery.min.js"></script>
        <script src="{{asset('tAdmin')}}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('tAdmin')}}/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{asset('tAdmin')}}/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{asset('tAdmin')}}/assets/libs/node-waves/waves.min.js"></script>
        
        <!-- App js -->
        <script src="{{asset('tAdmin')}}/assets/js/app.js"></script>
    </body>

<!-- Mirrored from themesbrand.com/skote-mvc/layouts/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jan 2021 08:43:28 GMT -->
</html>
