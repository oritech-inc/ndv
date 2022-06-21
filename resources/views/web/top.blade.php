{{-- Style --}}
@include('web.header.style')

<section id="top">
    <!-- Video -->
    <video class="animate__animated animate__fadeIn" id="background-video" autoplay controls loop muted poster="{{ asset('vids/head.mp4') }}">
        <source src="{{ asset('vids/head.mp4') }}" type="video/mp4">
    </video>

    <!-- Text -->
    <div id="header-content">
        <div class="container text-center mt-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h6 class="title animate__animated animate__flip">
                            WELCOME
                        </h6>
                        <p class="sub-title text-uppercase animate__animated animate__bounceIn animate__delay-1s">
                            <span>Ndevana </span>Location Community
                        </p>
                        <p class="animate__animated animate__bounceInUp animate__delay-1s">
                            An online web application for ndevana community to engage.
                        </p>
                    </div>
                </div>
            </div>
            <div class="mt-4 animate__animated animate__backInUp animate__delay-1s">
                <a class="btn btn-dark rounded-circle animate__delay-2s animate__animated animate__bounce animate__infinite infinite" href="#about" id="about-link">
                    <i class="fa-solid fa-arrows-up-down fa-2x mx-1"></i>
                </a>
            </div>
            <br>
            <div class="shape-wrapper container">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
</section>