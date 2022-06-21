<style>
    #home{
        min-height: 100vh;
        align-items: center;
        justify-content: center;
        background-image: url(https://images.unsplash.com/photo-1519120944692-1a8d8cfc107f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=872&q=80);
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }

    #home iframe{
        height: 40%;
    }

    #home .content{
        height: 60%;
    }

    .scroll{
        bottom: -10%;
    }
    .scroll span{
        font-size: 17px;
        letter-spacing: .2em;
        font-weight: 900;
        cursor: pointer;
        color: #333;

    }
    .scroll i{
        animation: scroll 0.95s ease-in-out alternate infinite;
        color: #333;
    }
    @keyframes scroll {
        0% {
            transform: translateY(0);
        }
        100% {
            transform: translateY(10px);
        }
    }
</style>

<header id="home">
    {{-- Navbar --}}
    @include('layouts.nav')

    <iframe class="ratio ratio-1x1 animate__animated animate__slideInDown animate__delay-1s" src="{{ asset('vids/head.mp4') }}" width="" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <div class="container text-center content">

        <div class="row justify-content-center py-5">
            <div class="col-lg-10 mt-5">
                <div class="section-title text-center">
                    <h6 class="title animate__animated animate__fadeInUp animate__delay-1s">
                        WELCOME
                    </h6>
                    <p class="sub-title text-uppercase animate__animated animate__zoomIn animate__delay-1s mt-2">
                        <span>Ndevana Location</span> Resident Engagement
                    </p>
                </div>
            </div>
        </div>

        <div class="scroll animate__animated animate__slideInUp animate__delay-1s ">
            <span>
                SCROLL
            </span><br>
            <i class="fa-solid fa-angle-double-down fa-lg pt-2 animate__delay-1s animate__animated animate__pulse animate__infinite infinite" aria-hidden="true"></i>
        </div>
    </div>

</header>
