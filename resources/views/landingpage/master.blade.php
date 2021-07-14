
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
        {{-- header --}}
        @include('landingpage.layout.header')
	</head>
		<body>

			  <header id="header" id="home">
			    {{-- navbar --}}
                @include('landingpage.layout.navbar')
			  </header><!-- #header -->


			<!-- start banner Area -->
             {{-- main content  --}}
             @yield('content')
			<!-- End banner Area -->

			<!-- Start about Area -->

			<!-- End about Area -->

			<!-- Start fact Area -->

			<!-- End fact Area -->

			<!-- Start counter Area -->

			<!-- end counter Area -->

			<!-- Start price Area -->
			{{-- pemenijaman --}}
			<!-- End price Area -->

			<!-- Start course Area -->
			{{-- kategori --}}
			<!-- End course Area -->

			<!-- Start call-to-action Area -->

			<!-- End testomial Area -->


			<!-- start footer Area -->
			{{-- footer --}}
            @include('landingpage.layout.footer')
			<!-- End footer Area -->
            {{-- js --}}
            @include('landingpage.layout.js')
		</body>
	</html>



