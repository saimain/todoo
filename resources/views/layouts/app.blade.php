@include('user.layouts.head')

<body>
    <div class="navbar">
        <div class="nav_logo">
            <img class="nav_logo_img" src="{{ asset('sources/images/ToDooLogo.svg') }}" alt="">
        </div>
    </div>


    @yield('form_content')

    @include('user.layouts.footer')