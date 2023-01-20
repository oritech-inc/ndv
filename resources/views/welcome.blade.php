<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {{-- head --}}
        @include('layouts.head')
    </head>

    <body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
        <!--[if IE]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please-in <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        {{ var_dump(Route::current())}}

        <div id="app" >
            {{-- Header --}}
            @include('layouts/nav')

            <main>
                {{-- Home --}}
                @include('pages.home')

                {{-- About --}}
                @include('pages.about')

                {{-- councillor --}}
                @include('pages.council')

                {{-- partner --}}
                @include('pages.partners')


                {{-- news --}}
                @include('pages.news')


                {{-- gallery --}}
                @include('pages.gallery')


                {{-- contact --}}
                @include('pages.contact')


                {{-- footer --}}
                @include('pages.footer')

            </main>

        </div>


{{--  --}}


    </body>
</html>
