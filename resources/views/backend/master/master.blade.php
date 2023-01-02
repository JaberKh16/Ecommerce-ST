@include('backend.include.head')
@include('backend.include.css')
@include('backend.include.navbar')
<div id="layoutSidenav">
    @include('backend.include.sideNavbar')

    <div id="layoutSidenav_content">
        <main>

            <div class="container-fluid px-4">

                @yield('productadd')
                @yield('manage')


            </div>
        </main>
        @include('backend.include.footer')
    </div>
</div>

@include('backend.include.scripts')
