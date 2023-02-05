<!DOCTYPE html>
<html lang="ar" dir="rtl">

    @include('layouts.partials.head')

    <body>
        @include('layouts.partials.header')
        
        <main class="main-content">
            @yield('PageContent')
        </main>
        
        @include('layouts.partials.footer')
    </body>

</html>