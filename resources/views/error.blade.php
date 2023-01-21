<?php

$title = ucfirst(env('APP_NAME')) . " Location Community";
$pg = "Http error 500 "
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A place where people from all walks of life can come together to connect, share, and grow. Our website offers a variety of features to help you connect with others who share your interests, including forums, groups, and chat rooms. You can also share your own content, such as photos, videos, and blog posts, and discover new content shared by others. Whether you're looking for support, friendship, or just a place to hang out and chat, our community website is the perfect place for you. Join today and start building connections with like-minded people from around the world.">
    <meta name="author" content="Samkelwe Samm Attwel Wakeni, and Original technologies team, Oritech, oritechno, original">
    <meta name="generator" content="alpha 0.0.1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        Application Error Hander : 
    </title>

    <link rel="shortcut icon" href="{{ asset('img/err.svg')  }}" type="image/x-icon">

    {{-- Plugins --}}

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <style>
        body {
            background-image: url("{{ asset('img/web/bg/error.jpg')  }}");
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            width: 100vw;
            height: 100vh;
            overflow-y: hidden;
        }

        #app-error {
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, .5);
        }

        img {
            max-width: 100vw;
            max-height: 30vh;
        }

        @media only screen and (min-width: 768px) {
            #app-error {
                padding-top: 2%;
            }

        }

        @media (max-width: 767px) {
            #app-error {
                padding-top: 2%;
            }

            #app-error .img-fluid {
                margin: 5px;
            }

            .card-text span {
                font-weight: bolder;
                text-decoration: underline;
                color: blue;
            }
        }
    </style>
</head>

<body>
    <!--[if IE]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please-in <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <div id="app-error">

        <main class="container col-xs-12 col-sm-8 col-md-6 col-lg-4">
            <div class="card border-dark bg-0 animate__animated animate__zoomIn">
                <div class="card-header h6 text-uppercase fw-bold text-muted text-center animate__animated animate__fadeInUp animate__delay-1s">
                    <kbd>HTTP ERROR 500 : Internal server error</kbd>
                </div>
                <img class="card-img-top img-thumbnail pt border-0 border-bottom animate__animated animate__fadeInDown animate__delay-1s" src="{{asset('img/web/icons/errors/500.svg') }}" alt="Error type image">

                <div class="card-body">
                    <h4 class="card-title text-center fw-bold h3 text-danger animate__animated animate__fadeInUp animate__delay-2s">
                        This page isn’t working
                    </h4>
                    <p class="card-text mt-4 h5 animate__animated animate__fadeInDown animate__delay-2s">
                        <i class="fw-bold">www.ndevana.co.za</i> is currently unable to handle the request. Try to:
                    </p>
                </div>
                <ul class="list-group list-group-flush py-2 mb-4 animate__animated animate__fadeInUp animate__delay-2s border-0">
                    <li class="list-group-item">
                        1. Double check the requested page url is correct.
                    </li>
                    <li class="list-group-item">
                        2. Tap reload <i>(F5 on your keyboard)</i> to refresh
                    </li>
                    <li class="list-group-item">
                        3. Tap contact link to notify this site webmaster.
                    </li>
                </ul>
                <div class="card-footer text-muted btn-group text-uppercase">
                    <a href="/" class="btn btn-primary pt-1 animate__animated animate__zoomInUp animate__delay-2s">
                        <i class="fas fa-sync pt-1 fa-pull-left"></i>
                        Reload now
                    </a>
                    <a href="mailto:info@ndevana.co.za?subject=Error 500: " target="_blank" class="btn btn-secondary animate__animated animate__zoomInUp animate__delay-2s" name="contact">
                        <i class="fas fa-paper-plane pt-1 fa-pull-right"></i>
                        contact us
                    </a>
                </div>
            </div>
        </main>

    </div>




</body>

</html>