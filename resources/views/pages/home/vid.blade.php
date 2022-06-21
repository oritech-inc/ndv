<style>
    .video-promo {
        background: url({{ asset('video/bg.png') }});
        padding:30px 0;
        position: relative;
        height:45%;
    }

    .video-promo .video-promo-content {
        color: #fff;
        opacity: .9;
    }

    .video-promo .video-promo-content .video-popup {
        width: 80px;
        height: 80px;
        line-height: 80px;
        text-align: center;
        border: 3px solid #fff;
        color: #fff;
        border-radius: 50%;
        display: inline-block;
        font-size: 26px;
    }

    .video-promo .video-promo-content h2 {
        margin-top: 20px;
        color: rgba(241, 73, 54, 1);
        font-size: 36px;
        font-weight: 900;
        text-transform: uppercase;
    }

    .video-promo .video-promo-content p {
        color: #fff;
        font-size: 24px;
        text-transform: uppercase;
    }

    .video-promo .video-promo-content p span {
        color: rgb(129, 129, 129);
        font-weight: 900;
        font-style: italic;
    }
</style>
<div class="video-promo">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 mt-5">
                <div class="video-promo-content text-center bg-dark py-2 rounded-3">
                    <a href="{{ asset('video/vid.mp4') }}" class="video-popup"><i class="lni lni-play"></i></a>
                    <h2 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="2s">
                        WELCOME
                    </h2>
                    <p class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">
                        <span>Ndevana Location</span> Community Website
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
