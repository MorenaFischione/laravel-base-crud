<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Comics | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('cdn-section')
</head>
<body>

    {{-- Header --}}
    @include('partials.header')


    {{-- Main --}}
    <main >
        <section>
            <div class="main-card p-3 m-2">
                @yield('content')    
            </div>            
        </section>
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    @yield('script-section')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>