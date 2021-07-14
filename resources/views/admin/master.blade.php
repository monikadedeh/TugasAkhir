<!DOCTYPE html>
<html lang="en">

<head>
    <!--header  -->
    @include('admin.layout.header')
</head>

<body>

    <div id="app">
    <!-- //sidebar -->
    @include('admin.layout.sidebar')
        </div>
        {{-- @include('admin.layout.navbar') --}}
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            {{-- main content  --}}
            @yield('content')
           <!-- footer -->
           @include('admin.layout.footer')
        </div>
    </div>
    <!-- js -->
    @include('admin.layout.js')
</body>

</html>

