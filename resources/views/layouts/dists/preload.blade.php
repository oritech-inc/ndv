<style>
    .loader {
        background: rgba(0, 0, 0, .9);
        width: 100%;
        height: 100%;
        line-height: 50px;
        text-align: center;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-family: helvetica, arial, sans-serif;
        font-weight: 900;
        letter-spacing: 0.5em;
        z-index: 9999999;
    }
    .loader span {
        position: absolute;
        width: 250px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #fff;
        text-transform: uppercase;
    }
    .loader span::before,
    .loader span::after {
        content: "";
        display: block;
        width: 15px;
        height: 10px;
        background: #fff;
        position: absolute;
        animation: load 0.7s infinite alternate ease-in-out;
    }
    .loader span::before {
        top: 0;
    }
    .loader span::after {
        bottom: 0;
    }
    @keyframes load {
        0% {
            left: -15px;
            height: 30px;
            width: 15px;
        }
        50% {
            height: 8px;
            width: 40px;
        }
        100% {
            left: 245px;
            height: 30px;
            width: 15px;
        }
    }
</style>

<div class="loader" >
    <span>Please Wait...</span>
</div>


<script>
    setTimeout(() => {
        $('.loader').attr('hidden','hidden');
    }, 2000);
</script>
