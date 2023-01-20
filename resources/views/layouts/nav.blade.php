@include('pages.style.nv')
<nav class="navbar navbar-expand-md fixed-top py-3 scrolling-navbar bg-dark navbar-dark animate__animated animate__fadeIn animate__slower">
    <div class="container">
        <a class="navbar-brand p-0 me-0 me-lg-2" href="{{ url('/') }}" aria-label="ndevana">
            <i class="fa-solid fa-handshake-angle"></i> NDEVANA
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars-staggered"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-center">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#home">{{ __('Home') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#about">{{  __('About') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#council">{{  __('Councillor') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#partners">{{  __('Partners') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#news">{{  __('Newsletter') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#gallery">{{  __('Gallery') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact">{{  __('Contacts') }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Accounts
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="{{ route('login') }}">
                                <i class="fa-solid fa-arrow-right-to-bracket fa-md fa-pull-right pt-1" aria-hidden="true"></i> Sign In
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('login') }}">
                                <i class="fa-solid fa-plus fa-md fa-pull-right pt-1" aria-hidden="true"></i> Register
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
