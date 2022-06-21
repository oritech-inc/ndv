<script>
    let status = 'online';
    let current = 'online';

    $(function(){
        function check_connection() {
            if(navigator.onLine){
                status = 'online';
            }else{
                status = 'offline';
            }

            if (current != status) {
                if (status == 'online') {
                    $('#tst-icon').removeClass('fa-ban text-danger').addClass('fa-wifi text-success');
                    $('#tst-text').html('You are online now');
                    $('.toast-body').text('Hurray! Internet is connected.');
                } else {
                    $('#tst-icon').addClass('fa-ban text-danger').removeClass('fa-wifi text-success');
                    $('#tst-text').html('You are offline now');
                    $('.toast-body').text('Opps! Internet is disconnected.');
                }
            }
            current = status;
            $('.toast').toast({
                autohide:false
            });
            $('.toast').toast('show');
        }
        check_connection();

        setInterval(() => {
            check_connection();
        }, 2000);

    });
</script>
<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
        <span class="fa-solid fa-wifi pr-1" id="tst-icon"></span>
        <strong class="me-auto" id="tst-text">
            You are online now
        </strong>
    </div>
    <div class="toast-body">
        Hurray! Internet is connected.
    </div>
</div>
{{-- Small --}}
@include('layouts.modals.sm')
