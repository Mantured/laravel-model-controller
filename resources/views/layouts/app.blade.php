<!DOCTYPE html>
<html lang="en">
    @include ('partials.head')
    <body>
        @include('partials.header')

        <main class="bg-dark pb-3">
            @yield('main-content')
        </main>

        @include('partials.footer')

    </body>
</html>
