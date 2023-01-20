<style>
    #home{
        height: 100vh;
        width: 100%;
        border-bottom: 1px solid rgba(0, 0, 0, .3);
        overflow: hidden;
    }

    #home video{
        object-fit: cover;
        height: 65vh;
        width: 100%;
    }

    #title{
        height: 35vh;
        background: var(--bck-white);
        background-attachment: fixed;
        background-position:center;
    }
</style>
<header id="home">
    <div class="justify-content-center ">
        <video class="animate__animated animate__fadeIn animate__fast" preload="auto" a controls muted>
            <source src="{{ asset('video/vid.mp4') }}" type="video/mp4">
        </video>
        <div class="row mb-3 title my-2">
            <div class="col-lg-12">
                <div class="section-title text-center pt-3">
                    <h6 class="title animate__animated animate__flipInY animate__slow">WELCOME</h6>
                    <h3 class="sub-title animate__animated animate__fadeInUp animate__delay-1s animate__slow">
                        <span>Ndevana Location </span> Community
                    </h3>
                </div>
            </div>
        </div>

        <div class="scroll">
            <span class=" animate__animated animate__flipInX animate__delay-2s animate__slower">
                SCROLL
            </span>
            <i class="fa-solid fa-angle-double-down fa-1x animate__animated animate__zoomInDown animate__delay-1s animate__slow" aria-hidden="true"></i>
        </div>
    </div>

</header>
