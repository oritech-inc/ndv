
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A place where people from all walks of life can come together to connect, share, and grow. Our website offers a variety of features to help you connect with others who share your interests, including forums, groups, and chat rooms. You can also share your own content, such as photos, videos, and blog posts, and discover new content shared by others. Whether you're looking for support, friendship, or just a place to hang out and chat, our community website is the perfect place for you. Join today and start building connections with like-minded people from around the world.">
<meta name="author" content="Samkelwe Samm Attwel Wakeni, and Original technologies team, Oritech, oritechno, original">
<meta name="generator" content="alpha 0.0.1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title> {{ ucwords($pg)." | ".$title }}</title>

<link rel="shortcut icon" href="{{ asset('img/logo.svg')  }}" type="image/x-icon">

{{-- Plugins --}}

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100" rel="stylesheet">

    <link href="{{ url('css/control.scss') }}" rel="stylesheet">
    <link href="{{ url('css/styles.css') }}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/main.js') }}" defer></script>


{{-- Offline --}}
    <link rel="stylesheet" href="{{ asset('dist/bs/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/fa/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/an/animate.min.css') }}">

    <script src="{{ asset('dist/js/jquery-3.5.0.min.js') }}"></script>
    <script src="{{ asset('dist/bs/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/an/wow.js') }}"></script>
    <script src="{{ asset('dist/js/main.js') }}"></script>
