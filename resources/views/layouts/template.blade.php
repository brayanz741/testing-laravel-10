<!DOCTYPE html>
<html lang="es">

@include('layouts.partials.head')

<body>

    @include('layouts.partials.header')
    @include('layouts.partials.aside')

    @yield('main-content')

    @include('layouts.partials.footer')

</body>

</html>
