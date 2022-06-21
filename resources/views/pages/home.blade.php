<style>
    #home{
        height: 100vh;
        width: 100vw;
        overflow: hidden;
    }

    #home video{
        object-fit: cover;
        opacity: .9;
        height: 50vh;
        width: 100%;
    }

    #title{
        height: 50vh;
    }
</style>
<header id="home">

    <video class="animate__animated animate__fadeInDown animate__delay_1s" preload="auto"  loop muted controls >
        <source src="{{ asset('video/vid.mp4') }}" type="video/mp4">
    </video>

    <div id="title" class="placeholder-glow">
        <div class="py-5">
            <div class="section-title text-center">
                <h6 class="title animate__animated animate__fadeInUp animate__delay-1s">WELCOME</h6>
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
</header>
