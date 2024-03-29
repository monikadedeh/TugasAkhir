
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{url('assets/vendors/iconly/bold.css')}}">

    <link rel="stylesheet" href="{{url('assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{url('assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{url('assets/images/favicon.svg')}}" type="image/x-icon">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" href="{{url('assets/css/pages/auth.css')}}">

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
                    <h1 class="auth">Register Siswa</h1>
                    <form class="md-float-material form-material" action="{{route('user.register.addProses')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" name="nama_siswa" class="form-control " placeholder="Nama Lengkap">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" name="username" class="form-control " placeholder="Username">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            @php
                                $kelas = DB::table('kelas')->get();
                            @endphp
                        <select name="id_kelas" class="form-control ">
                            <option selected> Pilih Kelas </option>
                            @foreach ( $kelas as $item )
                                <option value="{{$item->id_kelas}}">{{$item->jurusan}} {{$item->kelas}}</option>
                            @endforeach
                        </select>
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
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" name="confirmPassword" class="form-control " placeholder="Confirm Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-0">Register</button>
                    </form>
                    <div class="text-center mt-2 text-lg fs-4">
                        <p class='text-gray-200'>Already have an account? <a href="{{route('user.login')}}"
                                class="font-bold">Log
                                in</a>.</p>
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
