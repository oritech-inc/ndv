<style>
    .navbar-nav .nav-item > a:visited,
    .navbar-nav .nav-item > a.active,
    .navbar-nav .nav-item:hover > a {
        color: white;
        background: var(--clr-red-50);
    }
</style>
<nav class="navbar navbar-expand-lg bg-dark fixed-top navbar-dark animate__animated animate__fadeInDown animate__delay_1s">
    <div class="container main-nav">
        <a class="navbar-brand p-0 me-0 me-lg-2" href="{{ url('/') }}" aria-label="ndevana">
            NDEVANA
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa-solid fa-bars-staggered my-3 fa-lg"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#home">{{ ('Home') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">{{  ('About') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#council">{{  ('Councillor') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#partner">{{  ('Partners') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#news">{{  ('Newsletter') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallery">{{  ('Gallery') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">{{  ('Contacts') }}</a>
                </li>
            </ul>
            <form class="d-flex" role="form">
                <a href="" type="button" class="btn btn-sm btn-success pr-1 rounded-pill">
                    Signin <i class="fa-solid fa-arrow-right-to-bracket"></i>
                </a>&nbsp;
                <a href="" type="button" class="btn btn-sm btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#md-notify">
                    Signup <i class="fa-solid fa-user-plus"></i>
                </a>
            </form>
        </div>
    </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="md-notify" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="text-center text-muted">
                <div class="card">
                    <div class="card-body p-2 m-0">
                        <img class="card-img-top" alt="notify image" width="20" src="{{asset('img/web/icons/notify.svg')}}">
                        <p class="card-text text-xs p-2">
                            To enhance your browsing experience this application uses cookie,
                            by clicking the button you agree to our policy.
                        </p>

                    </div>
                    <div class="card-footer p-1">
                        <button type="button" class="btn btn-success col-12 btn-block rounded-pill" data-bs-dismiss="modal">
                            Agree to all <i class="fa-solid fa-long-arrow-right float-end pt-2"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
