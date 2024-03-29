
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Forgot Password</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{url('assets/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{url('assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/app.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/pages/auth.css')}}">

    </head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    {{-- <div class="auth-logo"> --}}
                        <img src="{{url('assets/images/logo.png')}}" style="width:200px; height:200px;" alt="Photo" srcset="">
                    {{-- </div> --}}
                    <h1 class="auth">Forgot Password Admin</h1>


                    <form action="{{route('admin.forgot.password')}}" method="POST" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <input type="text" class="form-control" name="no_telepon" value="{{$no_telepon}}">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control " name="newPassword" placeholder="Password Baru">
                            <div class="form-control-icon">
                              <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control " name="confirmPassword" placeholder="Konfirmasi Password">
                            <div class="form-control-icon">
                              <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-0">Send</button>
                    </form>
                    <div class="text-center mt-2 text-lg fs-4">
                        <p class='text-gray-200'>Remember your account? <a href="{{route('admin.login')}}" class="font-bold">Log
                                in</a>.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
</body>

</html>
