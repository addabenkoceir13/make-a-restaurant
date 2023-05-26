{{-- start include heas --}}
@include('layouts.admin.head')
{{-- start body  --}}
{{-- Start Body --}}
<body>
    <div class="d-flex" id="wrapper">
        {{--  --}}
        @include('layouts.Admin.slidebar')
        <!-- Start  Page content wrapper-->
        <div id="page-content-wrapper">
        {{--  --}}
        @include('layouts.Admin.navbar')
        <!-- Start Page content-->
        <div class="container-fluid">
            <h4 class="mt-4">@yield('title-page-cat' , 'Page Unknow')</h4>
            <div class="card">
                <div class="card-body">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- End Page content-->
    </div>
    <!-- End  Page content wrapper-->
</div>

{{-- start footer  --}}

@include('layouts.admin.footer')
