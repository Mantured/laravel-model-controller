<!DOCTYPE html>
<html lang="en">
    @include ('partials.head')
    <body>
        @include('partials.header')

        <main>
            @yield('main-content')
        </main>

        @include('partials.footer')

    </body>
</html>
