$(document).ready(function(){

    let modal_data

    setTimeout(() => {
        modal_data = {
            'content':[
                {'head':'<i class="fa-solid fa-cookie-bite fa-lg" id="ic-small"></i> Privacy policy'},
                {'text':'To enhance your browsing experience this website is using cookies, By clicking “Accept all cookies”, you agree Stack Exchange can store cookies on your device and disclose information in accordance with our Cookie Policy.'},
                {'foot':'<button id="bt-cookie" class="btn btn-info rounded-pill col-12" data-bs-dismiss="modal">Accept all cookies <i class="fa-solid fa-arrow-right float-end pt-1"></i></button>'}
            ]
        };
        showModal(modal_data);
    }, 500);
});


// scroll
$(document).scroll(function(e){
    e.preventDefault();
    if (document.documentElement.scrollTop > 80) {
        $('.main-nav').removeClass('py-2');
        // $('#background-video').css('position','fixed');
    }
    else{
        $('.main-nav').addClass('py-2');
    }
});

function showModal(m) {
    $('#md-small-title').html(m.content[0].head);
    $('#md-small-body').html(m.content[1].text);
    $('#md-small-foot').html(m.content[2].foot);

    $('#md-small').modal('show');
}
