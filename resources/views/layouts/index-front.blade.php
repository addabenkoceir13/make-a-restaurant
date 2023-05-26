{{-- head page --}}
@include('layouts.Frontend.head')

{{-- body page --}}
<body>

    {{-- start navbar page Top Bar & Header--}}
    @include('layouts.Frontend.navbar')
    {{-- end navbar page Top Bar & Header --}}

    @include('layouts.Frontend.slider')

    {{-- start main page --}}
    <main id="main">
        @yield('bread')
        <section class="inner-page">
            <div class="container">
                @yield('content')
        </section>
    </main>
    {{-- End main page --}}

    {{-- Satrt Footer page  --}}
    @include('layouts.Frontend.footer')
    {{-- end Footer page  --}}

    @include('layouts.Frontend.footer-scrpte')

