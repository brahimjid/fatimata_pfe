<div class="wrapper">

    @include('layouts.navbars.auth')

    <div class="main-panel">
        @include('layouts.navbars.navs.auth')

        <div class="row mt-5">
            <div class="col-md-12">
                <div class="container">
                    @yield('content')
                </div>
            </div>
        </div>

        @include('layouts.footer')
    </div>
</div>
