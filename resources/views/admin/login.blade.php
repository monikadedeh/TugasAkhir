
<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layout.header')
    @section('title',  'Login Admin')
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
                    <h1 class="auth-title">Log in.</h1>
                        @if (session()->has('message1'))
                            <div class="alert bg-danger text-white  alert-danger" role="alert">
                                 {{ Session::get('message1') }}
                            </div>
                         @elseif(session()->has('message2'))
                             <div class="alert bg-danger text-white  alert-danger" role="alert">
                                 {{ Session::get('message2') }}
                            </div>
                         @endif
                    <form class="md-float-material form-material" action="{{route('admin.login.simpan')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" name="username" class="form-control " placeholder="Username">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" name="password" class="form-control " placeholder="Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-gray-200" for="flexCheckDefault">
                                Keep me logged in
                            </label>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-2">Log in</button>
                    </form>
                    <div class="text-center mt-2 text-lg fs-4">
                        <p class="text-gray-200">Don't have an account?
                            <a href="{{route('admin.register')}}"
                                class="font-bold">Sign
                                up</a>.</p>
                        <p><a class="font-bold" href="{{route('admin.forgot')}}">Forgot password?</a>.</p>
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
