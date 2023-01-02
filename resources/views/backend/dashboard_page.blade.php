@include('backend.include.head')
@include('backend.include.css')
@include('backend.include.navbar')
<div id="layoutSidenav">
    @include('backend.include.sideNavbar')

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Backend Dashboard</li>
                </ol>
                <!-- @include('backend.include.primaryCard') -->
                <!-- @include('backend.include.manageTable') -->
            </div>
        </main>
        @include('backend.include.footer')
    </div>
</div>

@include('backend.include.scripts')
