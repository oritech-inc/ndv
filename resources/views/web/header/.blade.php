<style>
    /* Navbar */

    /* Video */

    /* Welcome */

    /* Scroll */

    /* Shapes */
    .shape-wrapper div
    {
        position: absolute;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background: rgba(255, 255, 255,.2);
        border: 2px solid rgba(255, 255, 255, 0.302);
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -ms-border-radius: 50%;
        -o-border-radius: 50%;
        z-index:-1;
    }
    .shape-wrapper div:nth-child(1)
    {
        top:12%;
        left: 42%;
        animation: animate 8s ease-in-out infinite;
        -webkit-animation: animate 8s ease-in-out infinite;
    }
    .shape-wrapper div:nth-child(2)
    {
        top:70%;
        left: 50%;
        animation: animate 5s ease-in-out infinite;
        -webkit-animation: animate 5s ease-in-out infinite;
    }
    .shape-wrapper div:nth-child(3)
    {
        top:17%;
        left: 6%;
        animation: animate 7s ease-in-out infinite;
        -webkit-animation: animate 7s ease-in-out infinite;
    }
    .shape-wrapper div:nth-child(4)
    {
        top:20%;
        left: 60%;
        animation: animate 8s ease-in-out infinite;
        -webkit-animation: animate 8s ease-in-out infinite;
    }
    .shape-wrapper div:nth-child(5)
    {
        top:67%;
        left: 10%;
        animation: animate 6s ease-in-out infinite;
    }
    .shape-wrapper div:nth-child(6)
    {
        top:80%;
        left: 70%;
        animation: animate 10s ease-in-out infinite;
        -webkit-animation: animate 10s ease-in-out infinite;
    }
    .shape-wrapper div:nth-child(7)
    {
        top:60%;
        left: 80%;
        animation: animate 13s ease-in-out infinite;
        -webkit-animation: animate 13s ease-in-out infinite;
    }
    .shape-wrapper div:nth-child(8)
    {
        top:32%;
        left: 25%;
        animation: animate 14s ease-in-out infinite;
        -webkit-animation: animate 14s ease-in-out infinite;
    }
    .shape-wrapper div:nth-child(9)
    {
        top:90%;
        left: 25%;
        animation: animate 9s ease-in-out infinite;
    }
    .shape-wrapper div:nth-child(10)
    {
        top:20%;
        left: 80%;
        animation: animate 6s ease-in-out infinite;
        -webkit-animation: animate 6s ease-in-out infinite;
    }

    @keyframes animate
    {
        0%
        {
            transform: scale(0) translate(0) rotate(0);
            opacity: .8;
        }
        100%
        {
            transform: scale(1) translate(-90px) rotate(360deg);
            opacity: 0;
            -webkit-transform: scale(1) translate(-90px) rotate(360deg);
            -moz-transform: scale(1) translate(-90px) rotate(360deg);
            -ms-transform: scale(1) translate(-90px) rotate(360deg);
            -o-transform: scale(1) translate(-90px) rotate(360deg);
        }
    }
</style>
