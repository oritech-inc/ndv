<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {{-- head --}}
        @include('layouts.head')
    </head>

    <body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
        <!--[if IE]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please-in <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->



        <div id="app" >
            {{-- Header --}}
            @include('layouts/nav')

            <main>
                {{-- Home --}}
                @include('pages.home')

                {{-- About --}}
                {{-- @include('pages.about') --}}

                {{-- councillor --}}
                {{-- @include('web.council') --}}

                {{-- footer --}}
                {{-- @include('web.footer') --}}

                <!-- Go To Top Link -->
                <a href="#" class="to-top">
                    <i class="lni-arrow-up"></i>
                </a>
            </main>

        </div>


{{--  --}}


    </body>
</html>
