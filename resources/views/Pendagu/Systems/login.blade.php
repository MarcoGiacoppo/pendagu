@extends('/Pendagu/Layouts/Main')

@section('Utama')
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center m-auto">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">
                                <img src="/assets/img/Gudang.jpg" class="w-100 h-100 py-2 pl-2">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900">Sistem Informasi Pengelolaan Data Gudang</h1>
                                        <h2 class="h5 my-3">Login Page</h2>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Enter Your Password...">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember Me</label>
                                            </div>
                                        </div>
                                        <a href="/" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </a>
                                    </form>
                                    <div class="text-center d-flex justify-content-between mt-3">
                                        <a class="small" href="forgot-password.php">Forgot Password?</a>
                                        <a class="small" href="register.php">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
